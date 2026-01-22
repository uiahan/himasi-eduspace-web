# Stage 1: Build Assets (Tailwind/Vite)
FROM node:20-alpine AS assets
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: PHP Runtime
FROM php:8.3-fpm-alpine

# Install system dependencies, PHP extensions, Nginx, dan Supervisor
RUN apk add --no-cache \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    zip \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    bash \
    nginx \
    supervisor

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql mbstring zip exif pcntl intl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy source code
COPY . .

# Copy assets dari stage pertama
COPY --from=assets /app/public/build ./public/build

# Install dependencies PHP
RUN composer install --no-dev --optimize-autoloader

# Konfigurasi Nginx & Supervisor
RUN mkdir -p /run/nginx /var/log/supervisor
COPY .docker/nginx.conf /etc/nginx/http.d/default.conf
COPY .docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Set Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

# Script Entrypoint: Migrate, Seed, Link, & Start
RUN echo "#!/bin/sh" > /usr/local/bin/start-app.sh && \
    echo "php artisan migrate --force" >> /usr/local/bin/start-app.sh && \
    echo "php artisan db:seed --force" >> /usr/local/bin/start-app.sh && \
    echo "php artisan storage:link" >> /usr/local/bin/start-app.sh && \
    echo "/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf" >> /usr/local/bin/start-app.sh && \
    chmod +x /usr/local/bin/start-app.sh

CMD ["/usr/local/bin/start-app.sh"]
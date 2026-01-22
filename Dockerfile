###################################
# Stage 1: Build Frontend Assets
###################################
FROM node:20-alpine AS assets
WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build


###################################
# Stage 2: PHP + Nginx Runtime
###################################
FROM php:8.3-fpm-alpine

# Install dependencies
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    bash \
    icu-dev \
    oniguruma-dev \
    libzip-dev \
    zip \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev

# PHP Extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo_mysql \
        mbstring \
        zip \
        exif \
        pcntl \
        intl \
        gd

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy source
COPY . .

# Copy built assets
COPY --from=assets /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Permissions
RUN chown -R www-data:www-data \
    storage \
    bootstrap/cache

# Nginx & Supervisor
RUN mkdir -p /run/nginx /var/log/nginx /var/log/supervisor
COPY .docker/nginx.conf /etc/nginx/http.d/default.conf
COPY .docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

###################################
# HEALTHCHECK (FIX)
###################################
HEALTHCHECK --interval=30s --timeout=5s --start-period=20s --retries=5 \
CMD curl -f http://localhost/health || exit 1

###################################
# Start Script
###################################
RUN printf '#!/bin/sh\n\
set -e\n\
chown -R www-data:www-data storage bootstrap/cache\n\
chmod -R 775 storage bootstrap/cache\n\
php artisan storage:link --force || true\n\
php artisan config:clear\n\
php artisan config:cache\n\
php artisan route:cache\n\
php artisan view:cache\n\
/usr/bin/supervisord -n -c /etc/supervisor/conf.d/supervisord.conf\n' > /usr/local/bin/start-app.sh \
&& chmod +x /usr/local/bin/start-app.sh

CMD ["/usr/local/bin/start-app.sh"]

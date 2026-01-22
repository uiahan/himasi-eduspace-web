# Stage 1: Build Assets (Tailwind/Vite)
FROM node:20-alpine AS assets
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: PHP Runtime
FROM php:8.3-fpm-alpine

# Install system dependencies & PHP extensions untuk Filament
RUN apk add --no-cache \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    zip \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    bash \
    nginx

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

# Set Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Konfigurasi Nginx sederhana (Opsional, Coolify bisa handle ini tapi lebih aman di dalam)
# Jika kamu pakai default Coolify, biasanya mereka sudah punya template Nginx.
# Namun untuk Dockerfile mandiri, kamu perlu entrypoint untuk start PHP & Nginx.

EXPOSE 80

CMD php artisan migrate --force && php-fpm
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
    curl \
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
# Tambahkan ini di bawah baris RUN mkdir -p /run/nginx /var/log/supervisor
RUN mkdir -p /var/log/nginx && chown -R www-data:www-data /var/log/nginx
COPY .docker/nginx.conf /etc/nginx/http.d/default.conf
COPY .docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Set Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

# ... (bagian atas tetap sama)

# Tambahkan konfigurasi Healthcheck agar Coolify tahu container sudah siap
HEALTHCHECK --interval=30s --timeout=5s --start-period=5s --retries=3 \
CMD curl -f http://localhost/ || exit 1

# Update script start-app.sh
RUN echo "#!/bin/sh" > /usr/local/bin/start-app.sh && \
    # Pastikan owner www-data secara rekursif
    echo "chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache" >> /usr/local/bin/start-app.sh && \
    # Tambahkan permission 775 agar grup www-data bisa nulis
    echo "chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache" >> /usr/local/bin/start-app.sh && \
    echo "php artisan storage:link --force" >> /usr/local/bin/start-app.sh && \
    echo "php artisan config:cache" >> /usr/local/bin/start-app.sh && \
    echo "php artisan route:cache" >> /usr/local/bin/start-app.sh && \
    echo "php artisan view:cache" >> /usr/local/bin/start-app.sh && \
    echo "(sleep 5 && php artisan migrate --force) &" >> /usr/local/bin/start-app.sh && \
    echo "/usr/bin/supervisord -n -c /etc/supervisor/conf.d/supervisord.conf" >> /usr/local/bin/start-app.sh && \
    chmod +x /usr/local/bin/start-app.sh

CMD ["/usr/local/bin/start-app.sh"]
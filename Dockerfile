# Build frontend assets
FROM node:20-alpine AS frontend

WORKDIR /app

COPY package*.json ./

RUN npm install

COPY . .

RUN npm run build

# PHP Runtime
FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

COPY --from=frontend /app/public/build ./public/build

RUN mkdir -p bootstrap/cache \
    && mkdir -p storage/framework/cache \
    && mkdir -p storage/framework/sessions \
    && mkdir -p storage/framework/views \
    && chmod -R 775 storage bootstrap/cache

RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --no-scripts

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
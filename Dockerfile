FROM php:8.3-fpm as php

WORKDIR /var/www

RUN apt-get update -y && apt-get install -y \
   libicu-dev \
   libmariadb-dev \
   libzip-dev unzip zip \
   zlib1g-dev \
   libpng-dev \
   libjpeg-dev \
   libfreetype6-dev \
   libjpeg62-turbo-dev \
   libpng-dev

# PHP Extension
RUN docker-php-ext-install gettext intl pdo_mysql gd zip opcache
RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg

COPY . /var/www
RUN cp .env.example .env

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader


RUN php artisan key:generate

RUN php artisan cache:clear
RUN php artisan config:clear

RUN php artisan storage:link
RUN php artisan icons:cache

EXPOSE 9000
CMD ["php-fpm"]

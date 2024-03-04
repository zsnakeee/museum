FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libbz2-dev \
    libzip-dev \
    zip \
    unzip \
    sqlite3 \
    libsqlite3-dev \
    libcurl4-openssl-dev \
    libonig-dev \
    libxml2-dev \
    pkg-config \
    libssl-dev \
    libicu-dev \
    libcurl4-openssl-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    g++ \
    zlib1g-dev \
    libzip-dev \
    libmagickwand-dev \
    imagemagick

RUN docker-php-ext-install pdo    
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install zip
RUN docker-php-ext-install fileinfo
RUN docker-php-ext-install curl
RUN docker-php-ext-install pdo_sqlite
RUN docker-php-ext-install intl
# RUN docker-php-ext-install openssl


# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy application code
COPY . .

# Install application dependencies
RUN composer install --no-dev --optimize-autoloader
RUN cp .env.example .env
RUN php artisan key:generate
RUN php artisan storage:link
RUN php artisan icons:cache


# Expose port 80 (assuming your Laravel app will run on port 80)
EXPOSE 80
EXPOSE 8000
# Start the PHP server (adjust as per your Laravel setup)
CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
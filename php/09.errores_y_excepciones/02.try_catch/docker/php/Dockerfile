FROM php:8-fpm-buster

# Use the default production configuration
COPY ./php.ini /usr/local/etc/php/conf.d/docker-php-config.ini

# Install system dependencies
RUN apt-get update && apt-get install -y git

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

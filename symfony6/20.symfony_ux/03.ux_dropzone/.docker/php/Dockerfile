FROM php:8.1-fpm-buster
ARG TIMEZONE

COPY php.ini /usr/local/etc/php/conf.d/docker-php-config.ini

RUN apt-get update && apt-get install -y \
    gnupg \
    g++ \
    procps \
    openssl \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    libpng-dev \
    libjpeg-dev \
    libicu-dev  \
    libonig-dev \
    libxslt1-dev \
    acl \
    && echo 'alias sf="php bin/console"' >> ~/.bashrc

RUN docker-php-ext-configure gd --with-jpeg --with-freetype 

RUN docker-php-ext-install \
    pdo pdo_mysql zip xsl gd intl opcache exif mbstring \
    && pecl install \
        apcu \
        xdebug \
    && docker-php-ext-enable \
        apcu \
        xdebug
        
# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

# Install composer
# ~~~~~~~~~~~~~~~~~~~~~~~~~~

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Enable Node Js
# ~~~~~~~~~~~~~~~~~~~~~~~~~~

RUN curl -sL https://deb.nodesource.com/setup_16.x -o nodesource_setup.sh
RUN bash nodesource_setup.sh
RUN apt-get update
RUN apt-get install nodejs -y
RUN rm nodesource_setup.sh

# Enable NPM
# ~~~~~~~~~~~~~~~~~~~~~~~~~~

# Whatever you did in your PHP Dockerfile
# this was missing for some reason. Didn't require last time.
RUN apt-get update
RUN apt-get install -y gnupg2
# Removing /var/lib/apt/lists worked
RUN rm -rf /var/lib/apt/lists/ && curl -sL https://deb.nodesource.com/setup_16.x | bash -
RUN apt-get install nodejs -y

RUN npm install -g npm@8.13.2

# Usermod
# ~~~~~~~~~~~~~~~~~~~~~~~~~~
RUN usermod -u 1000 www-data
RUN ls -l

# define workdir for project
WORKDIR /var/www/symfony
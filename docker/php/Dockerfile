FROM php:8.1-fpm

# COPY php.ini
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini

# Composer install
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
    apt-get -y install \
    git \
    zip \
    unzip \
    vim \
    dnsutils \
    netcat \
    iputils-ping net-tools \
    nodejs npm \
    && docker-php-ext-install pdo_mysql bcmath

# npm install
RUN npm install npm@latest -g

WORKDIR /var/www/html
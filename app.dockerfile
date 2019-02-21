FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    pecl install f redis \
    && docker-php-ext-install mbstring mysqli pdo pdo_mysql \
    &&  docker-php-ext-enable redis
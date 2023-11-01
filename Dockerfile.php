FROM php:8.2-fpm
LABEL maintainer "Leo Adamek <leo.adamek@mrzen.com>"

RUN pecl install xdebug-3.2.2 \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable xdebug
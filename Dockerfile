FROM composer:2.3.2 as vendor

WORKDIR /tmp

COPY composer.json composer.json

RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist


FROM php:8.1-apache

LABEL org.opencontainers.image.authors="Jean Billaud <billaudjean@gmail.com>"

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN a2enmod rewrite && service apache2 restart
RUN apt-get update && apt-get upgrade -y

COPY --from=vendor /tmp/vendor/ /var/www/html

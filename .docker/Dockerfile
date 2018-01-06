FROM php:7.2-apache

COPY . /app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /app

RUN docker-php-ext-install mbstring pdo pdo_mysql \
    && chown -R www-data:www-data /app

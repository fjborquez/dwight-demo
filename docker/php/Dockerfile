FROM php:8.1-fpm

RUN apt-get update
RUN apt-get install -y autoconf pkg-config libssl-dev

RUN pecl install xdebug-3.1.2
ADD xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

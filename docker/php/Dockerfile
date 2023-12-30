FROM php:8.2-fpm

# Install composer

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

#Install zip-extension
RUN apt-get update \
    && apt-get install -y zlib1g-dev libzip-dev \
    && docker-php-ext-install zip


#Init php file

COPY ./docker/php/php.ini /usr/local/etc/php/php.ini

#Workdir

WORKDIR /var/cargo
ADD . /var/cargo

EXPOSE 9000

RUN chown -R www-data:www-data /var/cargo


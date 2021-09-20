
# FROM php:7.3.0RC6-fpm-alpine3.8
FROM php:8.0-fpm-alpine
# timezone
ARG TZ

COPY ./docker/php/php.ini /usr/local/etc/php/
COPY ./laravel/ /var/www/laravel/

WORKDIR /var/www/laravel

RUN apk upgrade --update && apk add --no-cache \
coreutils freetype-dev jpeg-dev libjpeg-turbo-dev libpng-dev libmcrypt-dev \
git vim unzip tzdata \
libltdl && \
docker-php-ext-install pdo_mysql && \
docker-php-ext-install mysqli && \
docker-php-ext-install -j$(nproc) iconv && \
docker-php-ext-configure gd \
  --with-freetype\
  --with-jpeg && \
docker-php-ext-install -j$(nproc) gd && \
cp /usr/share/zoneinfo/${TZ} /etc/localtime && \
apk del tzdata && \
rm -rf /var/cache/apk/* 
# RUN  docker-php-ext-install mbstring 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
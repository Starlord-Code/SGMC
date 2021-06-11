FROM php:7.2-apache

RUN apt-get update && apt-get install -y

RUN docker-php-ext-install mysqli pdo_mysql

RUN mkdir /app \
 && mkdir /app/moe-php-mysql-demo \
 && mkdir /app/moe-php-mysql-demo/www

COPY www/ /app/moe-php-mysql-demo/www/
EXPOSE 3000

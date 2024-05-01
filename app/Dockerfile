# php image as a base
FROM php:7.4-apache

# Installing  mysqli , pdo , pdo_mysql  extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql 

# Copying the current dirctory content to root dirctory of apache server 
COPY . /var/www/html/

# Exposing port 80 for apache
EXPOSE 80


CMD ["apache2-foreground"]

################################
# Base image
################################
FROM php:7.1.2-apache

RUN docker-php-ext-install mysqli

################################
# Volume /var/www
################################
VOLUME ["/var/www"]

################################
# Port 80
################################
EXPOSE 80

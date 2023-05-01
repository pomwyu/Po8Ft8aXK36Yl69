#base image
FROM php:8.1-apache

#install mysqli sebagai extension PHP untuk mengakses data sql
RUN docker-php-ext-install mysqli

#copy semua local file ke directory di dalam container
COPY . /var/www/html/

#set permission pada www-data
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 774 /var/www/html

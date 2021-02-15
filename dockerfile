FROM php:7.4-apache

RUN chown -R www-data:www-data /var/www/

RUN chmod -R o-wx /var/www/

RUN docker-php-ext-install mysqli

COPY index.php /var/www/html/

EXPOSE 80

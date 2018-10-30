FROM php:7.2-apache

WORKDIR /var/www/html/php-mvc-examples/

COPY . .

EXPOSE 80

CMD ["apache2-foreground"]
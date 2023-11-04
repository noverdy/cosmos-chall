FROM php:8.2-apache


WORKDIR /var/www/html

COPY ./src/ /var/www/html

EXPOSE 80

RUN chown -R www-data:www-data /var/www/html
RUN find /var/www/html -type f -exec chmod 444 {} \;
RUN find /var/www/html -type d -exec chmod 555 {} \;

CMD ["apache2-foreground"]
FROM php:8.1.0-apache
COPY . /var/www/html/
RUN a2enmod rewrite
RUN a2enmod speling
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get -y update \
&& apt-get install -y libicu-dev \ 
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl
RUN apt-get update && apt-get install -y locales-all
RUN service apache2 restart
EXPOSE 8082
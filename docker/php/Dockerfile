FROM php:8.1-fpm
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
COPY ./ /var/www/laravel
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions gd intl mcrypt pdo_mysql pdo_pgsql xmlrpc zip bcmath
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www/laravel
RUN chmod -R 777 /var/www/laravel/storage/
RUN composer install

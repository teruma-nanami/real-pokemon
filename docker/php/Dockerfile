FROM php:8.1-fpm

COPY docker/php/php.ini /usr/local/etc/php/

RUN apt update \
  && apt install -y default-mysql-client zlib1g-dev libzip-dev unzip curl git zip \
  && docker-php-ext-install pdo_mysql zip

RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer \
  && composer self-update

RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - \
  && apt install -y nodejs

WORKDIR /var/www

# Laravelプロジェクトファイルをコピー
COPY ./backend /var/www

RUN composer install \
  && npm install

RUN chown -R www-data:www-data /var/www \
  && chmod -R 755 /var/www


# docker/php/Dockerfile

FROM php:fpm-alpine
COPY wait-for-it.sh /usr/bin/wait-for-it
RUN chmod +x /usr/bin/wait-for-it
RUN apk --update --no-cache add git
RUN docker-php-ext-install pdo_mysql
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-3.0.2 \
    && docker-php-ext-enable xdebug
#ADD php.ini /etc/php/conf.d/
#ADD php.ini /etc/php/cli/conf.d/
#ADD php.ini /usr/local/etc/php

WORKDIR /app
CMD   php
EXPOSE 9000
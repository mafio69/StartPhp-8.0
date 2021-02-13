# php/Dockerfile

FROM php:fpm-alpine
COPY wait-for-it.sh /usr/bin/wait-for-it
RUN chmod +x /usr/bin/wait-for-it
RUN apk --update --no-cache add git
RUN docker-php-ext-install pdo_mysql
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-3.0.2 \
    && docker-php-ext-enable xdebug

#RUN pecl install xdebug \
#    && docker-php-ext-enable xdebug \
#    && echo "xdebug.mode=debug xdebug.client_host = host.docker.internal"

RUN apk --update add wget \
  curl \
  git \
  grep \
  build-base \
  libmemcached-dev \
  libmcrypt-dev \
  libxml2-dev \
  imagemagick-dev \
  pcre-dev \
  libtool \
  make \
  autoconf \
  g++ \
  cyrus-sasl-dev \
  libgsasl-dev \
  supervisor

ENV ALPINE_MIRROR "http://dl-cdn.alpinelinux.org/alpine"
RUN echo "${ALPINE_MIRROR}/edge/main" >> /etc/apk/repositories
RUN apk add --no-cache nodejs-current  --repository="http://dl-cdn.alpinelinux.org/alpine/edge/community"
RUN node --version


RUN docker-php-ext-install mysqli pdo pdo_mysql tokenizer xml

RUN rm /var/cache/apk/*

ENV GROUP_ID=1000 \
    USER_ID=1000
ENV USER=docker
RUN addgroup "docker"

RUN adduser \
    --disabled-password \
    --gecos "" \
    --ingroup "$USER" \
    --no-create-home \
    --uid "$USER_ID" \
    "$USER"

COPY supervisord-app.conf /etc/supervisord.conf

WORKDIR /app

EXPOSE 9000
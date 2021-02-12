# nginx/Dockerfile
FROM nginx:alpine

RUN apk --update add supervisor

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


WORKDIR /app

CMD ["nginx"]

#ADD ./ini/php.ini /usr/local/etc/php

EXPOSE 80
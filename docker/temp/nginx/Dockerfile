# docker/nginx/Dockerfile
FROM nginx:alpine

WORKDIR /app

COPY --chown=nobody ./ /app
#ADD ./php.ini /usr/local/etc/php
CMD ["nginx"]

EXPOSE 80
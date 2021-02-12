FROM redis:alpine
WORKDIR /redis
COPY redis.conf /usr/local/etc/redis/redis.conf
COPY init.sh ./
CMD [ "redis-server", "/usr/local/etc/redis/redis.conf" ]
RUN chmod +x init.sh
FROM debian

RUN apt update && apt install -y php7.4-fpm php-mysql


RUN mkdir -p /run/php/ && touch /run/php/php7.4-fpm.pid

EXPOSE 9000

CMD ["php-fpm7.4","-F"]
#CMD tail -f /dev/null


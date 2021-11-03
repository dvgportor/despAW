FROM debian:11
ARG DOCKER_USER_ID

RUN userdel www-data
RUN useradd -l -u "$DOCKER_USER_ID" www-data
RUN apt update && apt install -y apache2 php

RUN apt install -y php-mysql php-intl php-xml php-mbstring php-apcu php-imagick
RUN apt install -y imagemagick git


RUN chown www-data /var/www/html

EXPOSE 80

CMD apachectl -D FOREGROUND
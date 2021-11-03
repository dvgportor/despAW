FROM mariadb:latest 
ARG DOCKER_USER_ID
ARG MARIADB_ROOT_PASSWORD
#RUN userdel mysql
#RUN useradd -l -u "$DOCKER_USER_ID" mysql
USER $DOCKER_USER_ID
CMD ["mysqld"]


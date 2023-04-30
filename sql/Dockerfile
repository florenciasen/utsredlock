FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD eon123

COPY redlock-db.sql /docker-entrypoint-initdb.d/

EXPOSE 3306

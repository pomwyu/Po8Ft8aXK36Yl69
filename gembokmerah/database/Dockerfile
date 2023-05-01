#base image 
FROM mysql:latest

#environment variable untuk connect dengan sqlnya
ENV MYSQL_ROOT_PASSWORD=abc123
ENV MYSQL_HOST=127.0.0.1
ENV MYSQL_USER=admin
ENV MYSQL_PASSWORD=abc123
ENV MYSQL_DATABASE=redlock-db

#di sini saya specified port yang dipakai yaitu 3305
EXPOSE 3305

#di sini saya copy local file sql ke directory di dalam container
COPY ./redlock-db.sql /docker-entrypoint-initdb.d/

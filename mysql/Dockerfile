# mysql image as a base
FROM mysql:8.0

# Set environment variables for mysql db
ENV MYSQL_DATABASE=team_database \
    MYSQL_ROOT_PASSWORD=root

# Copying sql script to starting the database
COPY team_database.sql /docker-entrypoint-initdb.d/

# Exposing port 3306 for mysql
EXPOSE 3306

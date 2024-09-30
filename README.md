# api-example
Just an API example


## Inspiration
I was trying to greate my own composer PHP-packages and implement them in a project.
This is an sample project to use docker as development environment and include that packages.

As a start-point I used https://medium.com/@etearner/setting-up-a-php-development-environment-with-docker-06cc7396a858

## Initial MySQL data
https://pavankjadda.dev/load-initial-schema-and-data-to-mysql-docker-container-on-start-up/

1. Create a directory to store your SQL scripts, for example /path/to/sql.
2. Write your SQL scripts to create the schema and load the data into separate files and place them in the /path/to/sql directory. For example, you might have 1-schema.sql and 2-data.sql files.
3. The scripts will be executed in alphabetical order, so you may want to prefix the files with numbers or letters to control the order in which they are executed (as shown in step 2)
4. Create a docker-compose.yml file and define a service for your MySQL database. The service definition should include a volume mapping that maps the /path/to/sql directory on the host to the /docker-entrypoint-initdb.d directory in the container. 

## Development

```shell
# Start dockers
docker-compose up

docker compose build
docker compose up -d
docker compose down


# ZSH
docker compose run app 
    cd /app
    composer install

    composer require roadie-xx/dotenv
    composer require roadie-xx/rest-api

    composer dump-autoload

    composer update roadie-xx/dotenv
    composer update roadie-xx/rest-api
```

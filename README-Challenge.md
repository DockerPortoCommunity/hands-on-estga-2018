> Challenge

## Software to use
- Docker Engine
- Docker Compose

## Description
Using the `Dockerfile.php` file you should be able to build a `docker-compose.yml` that will run 2 services:
- frontend container: a PHP image ready to deploy the source code on `src` folder.
- database container: a MySQL image to save the data produced by the frontend container.

You should initialize your software stack with `docker-compose`.

### Requirements
- For the frontend container you must use `php:7.1.2-apache` image. You can find it in the Docker Hub.
- On the frontend container, you must use the PHP code provided on the `src` folder in the folder `/var/www/html/`.
- You'll connect the frontend to the MySQL container through  port 3306/TCP.
- MySQL container must have the following environment variables initialized:
  - MYSQL_ROOT_PASSWORD=admin
  - MYSQL_DATABASE=forum

Have fun!

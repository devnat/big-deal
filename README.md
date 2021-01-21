# Application Offers

The following steps will get Offers application up and running.

## Requirements

You need **docker** and **docker-compose** up and running.


## Run containers

To start all of the containers, create the volumes, and set up and connect the networks run following command:

**docker-compose up -d**

To ensure that your user sessions and encrypted data remain secure run following command:

**docker-compose exec app php artisan key:generate**

**[OPTIONAL]**
To create database user (other than root) follow these steps.
1. Connect to db container running this command:

```bash
docker-compose exec db bash
```
2. Connect to mysql database(**password**: laravel):

```bash
mysql -u root -p 
```
3. Create a user by running following two commands:

```
GRANT ALL ON laravel.* TO 'laraveluser'@'%' IDENTIFIED BY ‘laravel’;
FLUSH PRIVILEGES;
```
4. Make sure you updated DB_USERNAME variable in .env file.
Once all the containers are up and running the files will be available on:

**http://127.0.0.1:80** or **localhost:80**


Note: to stop all the containers simple run **docker-compose down**.

That’s it!

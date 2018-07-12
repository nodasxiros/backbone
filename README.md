Installation Process

Requirements:
PHP 7.x
composer

Clone repo to prefer dist
cd into created repo
In terminal type: composer install, in order to install composer dependencies

After installation:
Create a database at localhost
Create a .env file from .env.example and fill in sql database name and credentials of your localhost
In terminal run: php artisan migrate, to run migrations
Serve applicaiton with: php artisan serve

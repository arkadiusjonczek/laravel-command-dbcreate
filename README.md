# laravel-command-dbcreate

Simple Laravel Command for your project to create the mysql database with artisan.

## Install

In your laravel project require the composer package with:

```bash
composer require arkadiusjonczek/laravel-command-dbcreate
```

After that the command will automatically be registered in your laravel project.

## Usage

Run the command:

```bash
php artisan db:create
```

Make sure you have configured your database!

## Laravel Artisan Docker workaround

If you use docker for your local development your database configuration in your .env might look like this:

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=databasename
DB_USERNAME=root
DB_PASSWORD=password
``` 

If you want to use artisan you have to go into your docker container.

But you can add  the following lines at the top of your app/database.php file:

```php
if (php_sapi_name() == 'cli' && getenv('APP_ENV') == 'local') {
    putenv('DB_HOST=127.0.0.1');
}
```

Now you can use artisan on your local machine without breaking your docker environment.
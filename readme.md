# Laravel Example REST API

 Simple example of a REST API with Laravel 5.8.
 This is a sample project to show how you could write an API using Laravel.

## Installation

It's very simple to get the API up and running. First, create the database (and database
user if necessary) and add a new `.env` file.

```php
DB_DATABASE=database
DB_USERNAME=username
DB_PASSWORD=password
```

Then install, generate app key, migrate, seed, create passport client and serve.

1. `composer install`
2. `php artisan key:generate`
2. `php artisan migrate`
3. `php artisan db:seed`
1. `php artisan passport:install`
4. `php artisan serve`

The API will be running on `localhost:8000`.

## Dependencies

- [Laravel Passport](https://laravel.com/docs/5.8/passport)

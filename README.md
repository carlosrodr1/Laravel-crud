# Laravel Crud App

A simple crud App with Laravel 6

## Installation

Clone the repository-
```
git clone https://github.com/carlosrodr1/Laravel-crud.git
```

Then cd into the folder with this command-
```
cd laravel-crud
```

Then do a composer install
```
composer install
```

Then create a environment file using this command-
```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `laravelcrud` and then do a database migration using this command-
```
php artisan migrate
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000/books` from your browser and see the app.

## Screenshot

![](https://i.imgur.com/sDNK13g.png)

![](https://i.imgur.com/etXOVHq.png)

![](https://i.imgur.com/U4e5HX8.png)

## Credits

- [Tanbir](https://github.com/ToTanbir)



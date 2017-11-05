![wtfpl](http://www.wtfpl.net/wp-content/uploads/2012/12/wtfpl-badge-1.png)
# 412-Shop
fund db project

## Requirement

* php7
* mariadb or mysql
* composer

## Installation

- Copy `.env.example` to `.env`

- Create database `412shop`

- Install dependencies

```bash
composer install
```

- Migrate database

```bash
php artisan migrate
```

## Develop

- Seed database

```bash
php artisan db:seed
```

- Run local server

```bash
php -S localhost:8000 -t public
```

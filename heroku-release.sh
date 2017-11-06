#/bin/sh

composer dump-autoload
php artisan migrate --seed

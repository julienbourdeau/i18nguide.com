#!/usr/bin/env bash

composer install --no-interaction --prefer-dist --optimize-autoloader

if [ -f ./docs.sh ]
then
    ./docs.sh
fi

php artisan migrate --force
php artisan view:cache
php artisan config:cache
php artisan route:cache

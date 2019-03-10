#!/usr/bin/env bash

current="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
cd $current

composer install --no-interaction --prefer-dist --optimize-autoloader

if [ -f ./build/docs.sh ]
then
    ./build/docs.sh
fi

php artisan migrate --force
php artisan view:cache
php artisan config:cache
php artisan route:cache

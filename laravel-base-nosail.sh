#!/bin/bash

git clone https://github.com/laravel/laravel.git
sudo mv laravel respins-laravel-nosail
sudo chown -R gitpod:gitpod respins-laravel-nosail
cp env-stubs/.env.nosail respins-laravel-nosail/.env
sudo bash composer.sh
cd database-compose && docker-compose up -d && cd ../
cd respins-laravel-nosail && composer install -o --no-cache && cd ../
cd respins-laravel-nosail && php artisan key:generate && cd ../
cd respins-laravel-nosail && sudo composer update -o --no-cache --prefer-dist && cd ../
cd respins-laravel-nosail && composer require laravel/jetstream && cd ../
sudo chown -R gitpod:gitpod respins-laravel-nosail
cd respins-laravel-nosail && sudo composer update -o --no-cache --prefer-dist && cd ../
cd respins-laravel-nosail && php artisan jetstream:install livewire && cd ../
sudo chown -R gitpod:gitpod respins-laravel-nosail
cd respins-laravel-nosail && php artisan serve --host 0.0.0.0
echo -e "Make sure to build assets using: npm install & npm run dev"
echo
echo -e "If you need to install npm, I suggest to use the nvm manager:"
echo -e "curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.37.2/install.sh | bash"
echo
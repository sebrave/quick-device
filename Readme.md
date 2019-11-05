Quick Device
============

Quick Device is an inventory management tool which you can use to keep track of your users' devices and phone numbers.

Installation
============

Copy from the public git repository

    git clone https://github.com/sebrave/quick-device.git

Update the .env config file to point at your local PostgreSQL database

To seed your database with dummy data:

    php artisan migrate:fresh

    composer dump-autoload

    php artisan db:seed

For Mac run with Laravel Valet https://laravel.com/docs/6.x/valet

    valet start

Install composer packages

    composer install

Update API documentation using Laravel API Documentation Generator
https://github.com/mpociot/laravel-apidoc-generator

    php artisan apidoc:generate

API docs can be viewed here http://quick-device.test/docs/index.html

Compile front end CSS using Webpack

    npm install
    npm run dev

You can access the API on your local machine at
quick-device.test/api/...

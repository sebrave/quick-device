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

You can access the API on your local machine at
quick-device.test/api/...

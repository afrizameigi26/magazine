git clone -b master https://github.com/afrizameigi26/magazine.git

cp .env.example .env

composer install

php artisan key:generate

php artisan migrate

php artisan serve

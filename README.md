git clone https://github.com/afrizameigi26/magazine.git

cd magazine

git checkout master

cp .env.example .env

composer install

php artisan key:generate

php artisan migrate

php artisan serve

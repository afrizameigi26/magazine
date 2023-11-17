git clone https://github.com/nama-username/nama-repo.git

cd magazine

cp .env.example .env

composer install

php artisan key:generate

php artisan migrate

php artisan serve

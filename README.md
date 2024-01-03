# setup

```bash
composer update
cp .env.example .env
php artisan key:generate
php artisan migrate --seed=BarangaySeeder
php artisan serve

npm install
npm run dev

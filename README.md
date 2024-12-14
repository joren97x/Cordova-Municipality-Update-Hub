
## backup
```bash
php artisan backup:run
```

# setup

```bash
composer update
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed=BarangaySeeder
php artisan serve & npm run dev
```



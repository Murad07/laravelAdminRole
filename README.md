## Install Laravel breeze using this command:

-   composer require laravel/breeze --dev
-   php artisan breeze:install
-   npm install and npm run dev

## Then install laratrust:

-   composer require santigarcor/laratrust
-   php artisan vendor:publish --tag="laratrust"
-   php artisan laratrust:setup
-   php artisan laratrust:seeder
-   php artisan vendor:publish --tag="laratrust-seeder"
-   composer dump-autoload

## In the database/seeds/DatabaseSeeder.php file you have to add this to the run method:

-   $this->call(LaratrustSeeder::class);

## Seeder confi file upadate as your need

### Your config/laratrust_seeder.php file looks like this by default:

### After config run:

-   php artisan migrate

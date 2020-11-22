**Setup:**

1. Create database named `listapp`.

1. In the project root directory

     * Create a copy of `.env.example` named `.env`
     
     * run `composer install`
     
     * run `php artisan key:generate`
     
     * Configure the database access attributes in the `.env` file.

     * run  `php artisan migrate --seed` 
            
     * run `php artisan serve`

1. After the server is running, you can login with username: admin, password: admin123.

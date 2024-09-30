
# Archintel-exam Backend

**Local System Requirements:**

1. PHP 8
2. composer
3. mySQL server

**How to run in local:**

1. (terminal) Go to root folder then run : `composer install`
2. Create new schema for your mySQL database: `archintel_exam`
3. copy `env.example` to `.env` 
	 - make sure mySQL server credentials and change value the following
 DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=`your mySQL port number`
DB_DATABASE=archintel_exam
DB_USERNAME=`your database username`
DB_PASSWORD=`your database password`
4. (terminal) run `php artisan migrate`
5. (terminal) run `php artisan key:generate`
6. (terminal) run `php artisan serve`
	-  	URL should be like http://localhost:8000 *Note: copy this to the frontend project .env*
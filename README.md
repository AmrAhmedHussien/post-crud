## HOW TO SETUP THE PROJECT

- clone the project
    ```bash
    git clone https://github.com/AmrAhmedHussien/post-crud
    ```
- run composer install
    ```bash
    composer install
    ```
- create .env file and setup database
    ```bash
    cp .env.example .env
    ```
     update your database credentials to .env <br>
     update your mail credentials to .env <br>
     add your auth.net credentials to .env <br>
- run
    ```bash
    php artisan key:generate
    ```
- run
    ```bash
    php artisan migrate
    ```
- run
    ```bash
    php artisan module:seed
    ```
    press 0 to seed all modules
- run
    ```bash
    php artisan storage:link
    ```



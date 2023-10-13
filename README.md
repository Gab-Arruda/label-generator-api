## Populate database
- The database is populated with some xlsx which are stored in storage/app. To populate the database use the command: "php artisan app:import-data"

## Console Main Commands
- To make a model and migration(-m): "php artisan make:model Category -m"
- To migrate: "php artisan migrate"
- To make a controller: "php artisan make:controller CategoryController --api"
- To run the project: "php artisan serve"

## Project setup
- To update dependencies: "composer update"
- Create a .env file and copy the .env.example content to the new file
- Add the full path of the database/database.db file in your computer to DB_DATABASE inside the .env and change DB_CONNECTION to sqlite
- To run the migrations: "php artisan migrate"
- To populate database: "php artisan app:import-data" (this can take some minutes to finish)
- To run the project: "php artisan serve"

## Activate ssh in my personal computer's git
- eval "$(ssh-agent -s)"
- ssh-add ~/.ssh/id_rsa

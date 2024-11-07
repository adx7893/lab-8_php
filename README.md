Inventory Management System
A Laravel-based Inventory Management System designed to manage and track inventory levels, orders, and suppliers.

Table of Contents
Getting Started
Prerequisites
Installation
Running the Project
Environment Variables
Usage
Contributing
License
Getting Started
Follow these instructions to set up and run the Inventory Management System on your local machine for development and testing purposes.

Prerequisites
Docker or Podman installed
PHP 8+
Composer
Node.js and npm
Installation
Clone the Repository:

bash
Copy code
git clone https://github.com/yourusername/inventory-management.git
cd inventory-management
Install PHP Dependencies:

bash
Copy code
composer install
Install JavaScript Dependencies:

bash
Copy code
npm install
npm run dev
Set Up Environment Variables:

Duplicate the .env.example file and rename it to .env.
Configure the necessary environment variables (e.g., database credentials) in the .env file.
bash
Copy code
cp .env.example .env
Generate Application Key:

bash
Copy code
php artisan key:generate
Running the Project
Using Docker/Podman
Build and Run Containers: Make sure you're in the root project directory where your Dockerfile and docker-compose.yml or podman-compose.yml files are located. Then, run the following command:

bash
Copy code
podman-compose up -d  # or docker-compose up -d
Run Migrations: Once the containers are running, run database migrations to set up the tables:

bash
Copy code
php artisan migrate
Access the Application
Open your browser and go to http://localhost:8000.
Environment Variables
Ensure the following environment variables are configured in your .env file:

APP_NAME: Application name
APP_ENV: Application environment (local, production, etc.)
APP_KEY: Application key (use php artisan key:generate to create)
DB_CONNECTION: Database connection (e.g., mysql)
DB_HOST: Database host
DB_PORT: Database port
DB_DATABASE: Database name
DB_USERNAME: Database username
DB_PASSWORD: Database password
Usage
Migrate Database:
bash
Copy code
php artisan migrate
Seed Database:
bash
Copy code
php artisan db:seed
Contributing
If you would like to contribute to this project, please fork the repository and submit a pull request.

License
This project is licensed under the MIT License - see the LICENSE file for details.

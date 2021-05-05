# Students grades calculator

## Setup

This app is made in Laravel 8 framework under Docker environment.
It requires having Docker installed on your local machine.
I decided to go with Docker for easier local development and Laravel offers a good preconfigured Docker package called Sail.

After downloading the project from repository, "cd" into project directory and execute 
```
$ composer install
```
to install all required dependencies.
After that execute 
```
$ vendor/bin/sail up
```
to build the Docker containers and services.

Then run the migrations to set up the database
```
$ vendor/bin/sail artisan migrate --seed
```


## Use
Go to ```http://localhost/students/1``` //returns json

Go to ```http://localhost/students/2``` //returns view

Go to ```http://localhost/students/3``` //returns view


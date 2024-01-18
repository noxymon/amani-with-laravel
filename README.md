# AMANI with Laravel

## Introduction

This repository contains the recoded version of the AMANI project, a unified platform for both the backend and frontend. The project is built using PHP Laravel with PostgreSQL as the database. The intention behind unifying the repo was to reduce the cost for the platform.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- PHP Laravel
- PostgreSQL

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/noxymon/amani-with-laravel.git
   ```
2. Navigate to the project directory
   ```sh
   cd amani-with-laravel
   ```
3. Install dependencies
   ```sh
   composer install
   ```
4. Create a copy of your .env file
   ```sh
   cp .env.example .env
   ```
5. Generate an app encryption key
   ```sh
   php artisan key:generate
   ```
6. Create an empty database for our application
7. In the .env file, add database information to allow Laravel to connect to the database
8. Migrate the database
   ```sh
   php artisan migrate
   ```

## Usage

After setting up the project, you can run it using the following command:

```sh
php artisan serve
```

This will start the Laravel application. You can then interact with the application via the exposed REST APIs.

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Contact

Your Name - [your-email@example.com](mailto:your-email@example.com)

Project Link: [https://github.com/noxymon/amani-with-laravel](https://github.com/noxymon/amani-with-laravel)

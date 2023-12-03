# Sekolah Management System - Laravel 10

### Assignment: UAS from Pak Jaka Taruna

Welcome to the Sekolah project! This is a basic Laravel application for managing student registrations in a school setting.

## CRUD Features
- **Student Registration:** Easily register new students by providing essential information. [Create]
- **Student Login:** Students can log in to access their accounts. [Read]
- **Student List:** View a comprehensive list of registered students. [Read]
- **Update Account/Student Information:** Modify and update your own account information through account management. [Update]
- **Remove Account/Student:** Remove your own account through account management. [Delete]


## Prerequisites

Before you begin, make sure you have the following tools installed on your machine:

- [PHP](https://www.php.net/) (>= 8.2.4)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (>= 14)
- [NPM](https://www.npmjs.com/) or [Yarn](https://yarnpkg.com/)

## Getting Started

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Rokuazery/sekolah.git
    ```

2. **Navigate to the project folder:**

    ```bash
    cd sekolah
    ```

3. **Install PHP dependencies:**

    ```bash
    composer install
    ```

4. **Copy the environment file:**

    ```bash
    cp .env.example .env
    ```

5. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

6. **Configure the database in the `.env` file:**

    Update the following database connection settings in the `.env` file to match your local environment:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

7. **Run migrations and seed the database:**

    ```bash
    php artisan migrate --seed
    ```

8. **Install Node.js dependencies:**

    ```bash
    npm install
    # or
    yarn
    ```

9. **Compile assets:**

    ```bash
    npm run dev
    # or
    yarn dev
    ```

10. **Run additional migration for student registration:**

    ```bash
    php artisan migrate --path=database/migrations/2023_11_30_231835_registrasi_siswa.php
    ```

## Run the Application

```bash
php artisan serve
  ```

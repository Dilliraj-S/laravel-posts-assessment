Laravel Posts Application
Overview

This project is a small Laravel application built as part of a practical assessment to demonstrate real-world Laravel fundamentals, code structure, authorization, validation, and clean development practices.

The application allows authenticated users to manage posts while enforcing proper access control so users can only modify their own content. UI styling is intentionally kept minimal to focus on backend logic and Laravel best practices.

Features

User authentication (registration, login, logout)

Authenticated users can:

Create posts

View posts

Edit their own posts

Delete their own posts

Authorization enforced using Laravel Policies

Server-side validation for all form inputs

Clean MVC structure using Eloquent models

MySQL database with migrations

Simple, custom CSS for basic usability (no UI frameworks)

Tech Stack

Laravel (latest stable version)

PHP 8+

MySQL

Blade Templates

Laravel Breeze (authentication scaffolding)

Git for version control

Setup Instructions

Follow these steps to run the project locally:

1. Clone the repository
   git clone <repository-url>
   cd laravel-posts-assessment

2. Install dependencies
   composer install

3. Environment setup

Create a .env file from the example:

cp .env.example .env

Update the database configuration in .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_posts_assessment
DB_USERNAME=your_mysql_username
DB_PASSWORD=your_mysql_password

Create the database manually in MySQL before running migrations.

4. Generate application key
   php artisan key:generate

5. Run migrations
   php artisan migrate

6. Serve the application
   php artisan serve

The application will be available at:

http://127.0.0.1:8000

Application Flow

Unauthenticated users are redirected to the login page

After login or registration, users are redirected to /posts

/posts displays the list of posts

Only the post owner can edit or delete their posts

Authorization is enforced at both controller and policy levels

Authorization & Validation

Authorization is implemented using a dedicated PostPolicy

Edit and delete actions are restricted to the post owner

Input validation is handled server-side using Laravel’s validation features

CSRF protection is enabled by default

UI & Styling

UI is intentionally simple and lightweight

Custom CSS is used instead of Tailwind or other UI frameworks

Focus is on clarity and usability rather than visual design

Assumptions Made

Laravel Breeze is acceptable for authentication scaffolding

UI design is not the primary evaluation criterion

MySQL is preferred over SQLite for a more production-like setup

Possible Improvements

Given more time, the following enhancements could be added:

Pagination for posts listing

Feature and unit tests

Flash success/error notifications

Better UI styling and responsiveness

API-based implementation for posts

Git Practices

Incremental commits with meaningful messages

No sensitive files committed (.env, vendor, node_modules)

Clear commit history aligned with feature development

Final Notes

This project focuses on demonstrating clean Laravel fundamentals, proper authorization, validation, and maintainable code structure rather than UI complexity or additional features.

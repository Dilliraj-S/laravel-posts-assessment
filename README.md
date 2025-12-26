Laravel Practical Assessment
Overview

This project is a small Laravel application built as part of a practical assessment to demonstrate real-world Laravel development skills.
The focus of this assessment is on Laravel fundamentals, clean code structure, validation, authorization, and best practices, rather than UI design.

Features
Authentication

User registration and login implemented using Laravel Breeze

Authentication middleware protects all post-related actions

Posts Module

Authenticated users can:

Create posts

View posts

Edit their own posts

Delete their own posts

Each post contains:

Title

Description

Created timestamp

Users cannot edit or delete posts created by other users.

Authorization & Validation

Server-side input validation is enforced using Laravel’s request validation

Authorization is handled using Laravel Policies to ensure users can only modify their own posts

Tech Stack

Laravel (latest stable version)

PHP

MySQL

Blade templates

Laravel Breeze for authentication

Git for version control

Project Structure

MVC architecture following Laravel best practices

Database schema managed using migrations

Business logic kept inside controllers and policies

Eloquent models used for database interaction

Setup Instructions
Prerequisites

PHP (8.x recommended)

Composer

MySQL

Node.js & npm

Installation Steps

Clone the repository:

git clone <repository-url>
cd <project-folder>

Install PHP dependencies:

composer install

Install frontend dependencies:

npm install
npm run build

Create a MySQL database:

CREATE DATABASE laravel_posts_assessment;

Configure environment variables:

cp .env.example .env

Update the .env file with your MySQL credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_posts_assessment
DB_USERNAME=your_username
DB_PASSWORD=your_password

Generate application key:

php artisan key:generate

Run migrations:

php artisan migrate

Start the development server:

php artisan serve

The application will be available at:

http://127.0.0.1:8000

Assumptions Made

Laravel Breeze was used for authentication for simplicity and reliability

MySQL was chosen to reflect a real-world production setup

UI styling was intentionally kept minimal, as UI/UX was not a focus of the assessment

Areas for Improvement

With more time, the following enhancements could be added:

Pagination for posts listing

Feature and unit tests

Improved UI/UX styling

API version of the posts module

Role-based permissions (if required)

Git Practices

Incremental commits with meaningful commit messages

.env, vendor/, and node_modules/ are excluded using .gitignore

Commit history reflects logical development stages

Final Notes

This project focuses on demonstrating:

Strong Laravel fundamentals

Clean and maintainable code

Proper validation and authorization

Thoughtful project structure and documentation

Thank you for reviewing this assessment.

Author

S Dilliraj

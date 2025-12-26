# 🚀 Laravel Posts Application

## 📌 Overview

This project is a **Laravel-based Posts Management Application** built as part of a practical assessment to demonstrate **real-world Laravel fundamentals**, clean code structure, authorization, validation, and maintainable development practices.

The application allows **authenticated users to manage posts**, with strict access control ensuring users can only modify their own content.

> 🎯 **Note:** UI styling is intentionally minimal to keep the focus on backend logic and Laravel best practices.

---

## ✨ Features

### 🔐 Authentication
- User registration
- Login & logout
- Secure session handling

### 📝 Post Management (Authenticated Users)
- Create posts
- View all posts
- Edit **only their own** posts
- Delete **only their own** posts

### 🛡️ Security & Best Practices
- Authorization enforced using **Laravel Policies**
- Server-side validation for all form inputs
- CSRF protection enabled by default
- Clean MVC architecture with Eloquent models

### 🗄️ Database
- MySQL database
- Proper migrations for schema management

### 🎨 UI
- Simple, custom CSS
- No UI frameworks (Tailwind/Bootstrap avoided)
- Focus on usability, not visual complexity

---

## 🛠️ Tech Stack

- **Framework:** Laravel (latest stable version)
- **Language:** PHP 8+
- **Database:** MySQL
- **Frontend:** Blade Templates
- **Authentication:** Laravel Breeze
- **Version Control:** Git & GitHub

---

## ⚙️ Setup Instructions

Follow the steps below to run the project locally.

### 1️⃣ Clone the Repository
git clone <repository-url>
cd laravel-posts-assessment
2️⃣ Install Dependencies
composer install

3️⃣ Environment Setup

Create the environment file:

cp .env.example .env


Update database credentials in .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_posts_assessment
DB_USERNAME=your_mysql_username
DB_PASSWORD=your_mysql_password


⚠️ Make sure to create the database manually in MySQL before running migrations.

4️⃣ Generate Application Key
php artisan key:generate

5️⃣ Run Migrations
php artisan migrate

6️⃣ Serve the Application
php artisan serve


📍 The application will be available at:
http://127.0.0.1:8000

🔄 Application Flow

Unauthenticated users are redirected to the login page

After login or registration, users are redirected to /posts

/posts displays the list of all posts

Only the post owner can edit or delete their posts

Authorization is enforced at both controller and policy levels

🔐 Authorization & Validation

Authorization implemented using a dedicated PostPolicy

Edit and delete actions restricted to the post owner

Server-side input validation using Laravel’s validation system

CSRF protection enabled by default

🎨 UI & Styling

Intentionally simple and lightweight UI

Custom CSS used instead of Tailwind or other frameworks

Focus on clarity, usability, and backend evaluation

📌 Assumptions Made

Laravel Breeze is acceptable for authentication scaffolding

UI design is not the primary evaluation criterion

MySQL is preferred over SQLite for a production-like setup

🚀 Possible Improvements

Given more time, the following enhancements could be added:

Pagination for post listings

Feature and unit tests

Flash success/error notifications

Improved UI styling and responsiveness

API-based implementation for posts

🧾 Git Practices

Incremental commits with meaningful messages

No sensitive files committed (.env, vendor, node_modules)

Clear commit history aligned with feature development

📝 Final Notes

This project focuses on demonstrating clean Laravel fundamentals, proper authorization, validation, and maintainable code structure rather than UI complexity or additional features.

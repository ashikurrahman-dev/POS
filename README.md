# 🧾 POS Application

A Laravel-based application to manage Products, Customers, Invoices, and Users. Built for simplicity, scalability, and efficiency in handling business operations.

## 🚀 Features

- ✅ User Authentication (Login/Registration/Forget Password)
- ✅ Category Management (CRUD)
- ✅ Product Management (CRUD)
- ✅ Customer Management (CRUD)
- ✅ Invoice Creation & Management
- ✅ Add Multiple Products to Invoices
- ✅ Invoice Total Calculation (Subtotal, Tax, Discount)
- ✅ PDF Export or Print Invoices (Optional)
- ✅ Responsive UI (using Laravel Vite or Mix)
- ✅ RESTful Routing & MVC Architecture
- ✅ Clean & Maintainable Codebase

## 🛠️ Built With

- PHP (Laravel Framework)
- MySQL
- Blade Templating Engine
- JWT (for auth scaffolding)
- Bootstrap
- JavaScript (Axios)

## 📦 Installation

```bash
git clone https://github.com/your-username/pso-application.git](https://github.com/ashikurrahman-dev/POS.git
cd pos

# Install PHP dependencies
composer install

# Install Node dependencies
npm install
npm run dev

# Set up environment
cp .env.example .env
php artisan key:generate

# Set up database
php artisan migrate
php artisan db:seed

# Start the server
php artisan serve

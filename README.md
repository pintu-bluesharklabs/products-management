# 📦 Products Management REST API (Laravel 12)

A RESTful API built with **Laravel 12** for managing products and their prices in **multiple currencies**.
This project demonstrates clean API design, Eloquent relationships, database migrations, seeders, and Postman documentation.

---

## 🚀 Features

- Product CRUD (Create, Read, Update, Delete)
- Multi-currency product pricing
- Tax & manufacturing cost support
- RESTful API endpoints
- JSON responses
- Dummy data seeders (5 records)
- Postman collection included

---

## 🛠 Tech Stack

- Backend: Laravel 12 (PHP 8.2+)
- Database: MySQL (MAMP Pro compatible)
- ORM: Eloquent
- API Testing: Postman


---

## 🔌 API Endpoints

GET    /api/products
POST   /api/products
GET    /api/products/{id}
PUT    /api/products/{id}
DELETE /api/products/{id}
GET    /api/products/{id}/prices
POST   /api/products/{id}/prices

---

## ⚙️ Installation

composer install
cp .env.example .env
php artisan key:generate

---

## 🗄️ Migration & Seeding

php artisan migrate:fresh --seed

---

## ▶️ Run Server

php artisan serve

---


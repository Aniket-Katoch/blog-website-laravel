# 📝 Laravel Blog Platform

A fully functional blog platform built with **Laravel**, **Bootstrap**, and **MySQL**. This project enables users to **create**, **view**, **edit**, and **delete** blog posts. It features a responsive UI, clean code architecture, and uses **Faker** with **Laravel seeders** to auto-generate realistic blog content for development.

## 🚀 Features

- 🧩 MVC architecture with Laravel
- ✍️ Blog post CRUD functionality
- 🧪 Blog posts seeded using Laravel Seeder + Faker
- 📚 MySQL database integration
- 💡 Clean, responsive UI with Bootstrap
- 🖼️ Dynamic frontend using Blade templates
- ⚙️ Vite-powered frontend tooling

---

## 🧰 Technologies Used

- **Backend:** PHP (Laravel)
- **Frontend:** Bootstrap, Blade templates, Tailwind (form styling)
- **Database:** MySQL
- **Build Tool:** Vite
- **Utilities:** Faker, Laravel Seeder, Alpine.js, Axios

---

## 📦 Getting Started

Follow these steps to set up the project locally.

### 1. Clone the Repository

```bash
git clone https://github.com/Aniket-Katoch/blog-website-laravel.git
cd blog-website-laravel

composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate --seed

php artisan serve


## 🙋‍♂️ Author

**Aniket Katoch**  
[GitHub](https://github.com/Aniket-Katoch)

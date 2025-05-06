# Mini PHP MVC Framework

A beginner-friendly mini MVC (Model-View-Controller) framework built using core PHP. This project demonstrates the basics of building your own PHP framework from scratch with routing, controllers, views, error handling, and simple styling.

---

## 🚀 Features

- ✅ Custom **Routing System** (supports GET & POST)
- ✅ Clean **Controller / View architecture**
- ✅ Lightweight **PHP templating**
- ✅ Basic **404 and 500 Error Handling**
- ✅ Detects and greets user using **System Username**
- ✅ Simple **CSS Styling** (embedded and external)
- ✅ Easy to extend and customize

---

## 📁 Folder Structure

```
mini-php-mvc/
├── app/
│   ├── controllers/
│   │   └── HomeController.php
│   ├── core/
│   │   ├── App.php
│   │   └── Router.php
│   └── views/
│       ├── home.php
│       ├── layout.php
│       ├── 404.php
│       └── 500.php
├── public/
│   ├── index.php
│   └── style.css
└── README.md
```

---

## 🧑‍💻 How to Run the Project (Step-by-Step)

### 📌 Requirements

- PHP 7.4+  
- Apache (XAMPP or similar)
- A text editor like **VS Code**

### 🔧 Setup Instructions

1. **Download/Clone the project**

   Place it in your Apache root directory:

   ```
   C:/xampp/htdocs/mini-php-mvc/
   ```

2. **Start Apache** using XAMPP.

3. **Access in Browser**:

   ```
   http://localhost/mini-php-mvc/public
   ```

   You should see the homepage.

---

## 🔗 URLs You Can Test

| URL | Description |
|-----|-------------|
| `/mini-php-mvc/public` | Home Page with Greeting |
| `/mini-php-mvc/public/home/greet` | Greet current system user |
| `/mini-php-mvc/public/unknowncontroller` | 404 Error Page |
| `/mini-php-mvc/public/trigger500` | 500 Error Page (Internal Error Simulation) |

---

## 🎨 Styling

- `style.css` is located in the `public/` folder.
- It includes basic styles for:
  - Buttons
  - Headings
  - Error pages
- Additionally, **404 and 500 pages** include inline CSS for standalone fallback styling.

---

## 📄 How It Works

### 📌 Routing System

All URLs pass through `public/index.php` which bootstraps:

- `App.php`: Initializes the router
- `Router.php`: Parses the URL and loads the correct controller/method

### 📌 Controllers

All controllers live in:

```
app/controllers/
```

Example: `HomeController.php` handles `/home/greet`

### 📌 Views

Views are stored in:

```
app/views/
```

Use `layout.php` for shared HTML structure (header, footer, etc.).

---

## ➕ How to Add a New Page/Route

1. **Create a Controller**

```php
// app/controllers/AboutController.php
class AboutController {
    public function index() {
        require "../app/views/about.php";
    }
}
```

2. **Create a View**

```php
<!-- app/views/about.php -->
<h1>About Page</h1>
<p>This is a sample about page.</p>
```

3. **Visit it**

```
http://localhost/mini-php-mvc/public/about/index
```

---

## 🧱 Error Pages with CSS

### 404

```php


### 500

```php

---

## 🙌

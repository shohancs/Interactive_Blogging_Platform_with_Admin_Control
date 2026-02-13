# Interactive Blogging Platform with Admin Control

![Untitled design (5)](https://github.com/user-attachments/assets/28076356-56e1-46d3-87f5-311c5d2ca368)


**Live Demo** → https://shohancs.com/projects/Interactive_Blogging_Platform_with_Admin_Control/ <br>
**GitHub** → https://github.com/shohancs/Interactive_Blogging_Platform_with_Admin_Control

**User Login:** [Login Page](https://shohancs.com/projects/Interactive_Blogging_Platform_with_Admin_Control/login.php)
🧑‍💻  — Email: `user@gmail.com` | Password: `12345`

**Admin Login:** [Admin Panel](https://shohancs.com/projects/Interactive_Blogging_Platform_with_Admin_Control/admin/)
👨‍💼  — Email: `admin@gmail.com` | Password: `12345`

**Database Name:** `news_blog_portal`

---

## 📰 Overview

A **modern, interactive blogging platform** that empowers users to publish their own blogs while giving admins complete control over content moderation, category management, and system maintenance.

This project is built with scalability and clean architecture in mind — ensuring a smooth, secure, and responsive experience for both readers and administrators.

## 🚀 Key Features

* 🧾 **User-Generated Blogs** — Registered users can create, edit, and manage their posts.
* 🧑‍💼 **Admin Dashboard** — Admins can control posts, categories, comments, and users.
* 💬 **Comment System** — Readers can interact and share feedback on posts.
* 🗂️ **Category Management** — Admin can create nested categories and assign parent-child relations.
* 🔐 **Authentication System** — Secure login, registration, and session management.
* 📱 **Responsive UI** — Works seamlessly across desktop, tablet, and mobile.
* ⚙️ **Status Control** — Active/Inactive state management for posts and categories.

---
## This Project Stands Out (Recruiter Magnet Points)

- Full CRUD + Soft Delete + Status Management
- Role-based access (User vs Super Admin)
- Nested Category System with Parent-Child Hierarchy
- Real-time comment interaction
- Production-ready responsive design (mobile-first)
- Secure authentication with session hijacking protection

This is not just another blog – it's a complete content management system disguised as a learning project.

---

## 🧠 Tech Stack

| Layer               | Technology                                      |
| ------------------- | ----------------------------------------------- |
| **Backend**         | PHP (Laravel-ready structure)                   |
| **Frontend**        | HTML, CSS, Bootstrap / Tailwind CSS, JavaScript |
| **Database**        | MySQL (`news_blog_portal`)                      |
| **Server**          | Apache / XAMPP / cPanel                         |
| **Version Control** | Git & GitHub                                    |

---

## ⚡ Installation Guide

> Make sure PHP, Composer, Node.js, and MySQL are installed.

1. **Clone the Repository:**

```bash
git clone https://github.com/shohancs/Interactive_Blogging_Platform_with_Admin_Control.git 
cd Interactive_Blogging_Platform_with_Admin_Control

```

Access the app at: **localhost/projects/Interactive_Blogging_Platform_with_Admin_Control**

---

## 🧩 Database Tables Overview

### 🔹 category

| Column      | Description                                    |
| ----------- | ---------------------------------------------- |
| `cat_id`    | Primary key                                    |
| `cat_name`  | Category name (e.g., Technology, Sports, etc.) |
| `cat_desc`  | Description of category                        |
| `is_parent` | Defines parent-child relationship              |
| `status`    | 1 = Active, 0 = Inactive                       |

Other main tables: `users`, `post`, `comments`

---

## 👨‍💻 Developer / Owner

**Shohanur Rahman Shohan**  
Full-Stack Software Engineer  
Available for Remote, Freelance & Full-time roles

- 🌐 Portfolio: https://shohancs.com  
- 📧 Email: **shohancs.dev@gmail.com**  
- 🔗 LinkedIn: https://linkedin.com/in/shohancs  

---


## License

[![License: MIT](https://img.shields.io/badge/License-MIT-brightgreen.svg?style=flat-square)](https://opensource.org/licenses/MIT)      

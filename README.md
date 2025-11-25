# Interactive Blogging Platform with Admin Control

![Untitled design (5)](https://github.com/user-attachments/assets/28076356-56e1-46d3-87f5-311c5d2ca368)


**Live Demo:** [Main Website](https://shohancs.com/projects/Interactive_Blogging_Platform_with_Admin_Control/)

**User Login:** [Login Page](https://shohancs.com/projects/Interactive_Blogging_Platform_with_Admin_Control/login.php)
🧑‍💻 Dummy Credentials — Email: `user@gmail.com` | Password: `12345`

**Admin Login:** [Admin Panel](https://shohancs.com/projects/Interactive_Blogging_Platform_with_Admin_Control/admin/)
👨‍💼 Dummy Credentials — Email: `admin@gmail.com` | Password: `12345`

**Database Name:** `news_blog_portal`

---

## 📰 Overview

A **modern, interactive blogging platform** that empowers users to publish their own blogs while giving admins complete control over content moderation, category management, and system maintenance.

This project is built with scalability and clean architecture in mind — ensuring a smooth, secure, and responsive experience for both readers and administrators.

---

## 🚀 Key Features

* 🧾 **User-Generated Blogs** — Registered users can create, edit, and manage their posts.
* 🧑‍💼 **Admin Dashboard** — Admins can control posts, categories, comments, and users.
* 💬 **Comment System** — Readers can interact and share feedback on posts.
* 🗂️ **Category Management** — Admin can create nested categories and assign parent-child relations.
* 🔐 **Authentication System** — Secure login, registration, and session management.
* 📱 **Responsive UI** — Works seamlessly across desktop, tablet, and mobile.
* ⚙️ **Status Control** — Active/Inactive state management for posts and categories.

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
git clone https://github.com/<your-username>/Interactive_Blogging_Platform_with_Admin_Control.git
cd Interactive_Blogging_Platform_with_Admin_Control
```

2. **Install Dependencies:**

```bash
composer install
cp .env.example .env
php artisan key:generate
```

3. **Configure Database:**

* Open `.env` file and update database credentials:

  ```env
  DB_DATABASE=news_blog_portal
  DB_USERNAME=your_username
  DB_PASSWORD=your_password
  ```
* Run migration & seeding:

  ```bash
  php artisan migrate --seed
  ```

4. **Frontend Setup:**

```bash
npm install
npm run dev   # for local dev
npm run build # for production
```

5. **Run Application:**

```bash
php artisan serve
```

Access the app at: **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

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

## 💡 Future Enhancements

* 🤖 **AI Integration** — Auto title suggestion & content summary using free AI APIs
* 📝 Rich Text Editor (CKEditor or Quill)
* 🌍 Multi-language support
* 🔔 Real-time notification system
* 📊 Analytics dashboard for admins

---

## 🧑‍💻 Author

**Shohanur Rahman Shohan**
🎓 Computer Science Graduate | 💼 Full Stack Developer<br>
🌐 [Portfolio](https://shohancs.com)<br>
📧 Email: `shohancs.dev@gmail.com`<br>
🐙 GitHub: [github.com/shohancs]([shohancs](https://github.com/shohancs))

---

*Made with ❤️ by Shohanur Rahman Shohan — for learning, portfolio, and professional showcase.*

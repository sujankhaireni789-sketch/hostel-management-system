# Northstar Hostel deployment guide

This project follows the hostel-management structure you provided.

## 1. Local setup with XAMPP

1. Install XAMPP and start **Apache** and **MySQL**.
2. Copy this complete project folder into `C:\xampp\htdocs\hostel-management`.
3. Open phpMyAdmin at `http://localhost/phpmyadmin`.
4. Create a database named `northstar_hostel`.
5. Open `config/database.php` and confirm the database values:

```php
const DB_HOST = 'localhost';
const DB_NAME = 'northstar_hostel';
const DB_USER = 'root';
const DB_PASS = '';
```

6. Open `http://localhost/hostel-management/index.html`.
7. To test the PHP login, open `http://localhost/hostel-management/login.php`.

## 2. Login test

- Choose **Warden / Admin** to open the admin dashboard.
- Choose **Student** to open the student dashboard.
- This is a demo session login. Replace it with a database user lookup before production.

## 3. Shared project structure

- `config/database.php`: one PDO database connection.
- `includes/auth.php`: session and role protection.
- `includes/header.php`, `sidebar.php`, `footer.php`: reusable layout.
- `admin/`: warden modules for residents, rooms, fees, attendance, complaints, visitors, notices and reports.
- `student/`: resident-facing profile, room, fees, attendance, complaints and notices.
- `assets/`: shared CSS, JavaScript and images.
- `uploads/students/`: student photo upload destination.

## 4. Shared-host deployment

1. Create a MySQL database and user in your hosting control panel.
2. Update the four constants in `config/database.php` with the hosting values.
3. Upload the project files into the domain's document root, commonly `public_html`.
4. Keep the folder names and lowercase filenames unchanged.
5. Visit your domain and test `login.php`, admin login, student login and logout.
6. Give `uploads/students` write permission only when photo uploads are implemented.
7. Enable HTTPS and change the demo login to password-hashed database authentication.

The current visual dashboard in `index.html` works without PHP or MySQL. The PHP pages are the deployment-ready application scaffold for connecting real records.

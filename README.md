---

# Online Blood Donation & Management System

## Project Overview

The **Online Blood Donation & Management System** is a web-based platform designed to manage blood donors, recipients, and blood banks efficiently. The system streamlines blood donation processes, ensures quick access to blood in emergencies, and promotes community involvement.

Built using **PHP**, **MySQL/SQL Server**, **HTML**, **CSS**, and **Bootstrap**, this system is a real-world solution to modernize traditional blood donation management.

---

## Features

* Donor registration and profile management
* Blood group management
* Recipient request handling
* Blood donation camp management
* Admin dashboard for managing donors, requests, and contact queries
* Automated notifications for donors and recipients
* Search functionality to find donors based on blood group and location

---

## Project Structure

```
/project-root
│
├─ index.php                  # Home page
├─ dashboard.php              # Admin dashboard
├─ donor-list.php             # List of registered donors
├─ add-bloodgroup.php         # Add new blood group
├─ manage-bloodgroup.php      # Manage existing blood groups
├─ contact-us.php             # Contact form page
├─ forgot-password.php        # Forgot password page
├─ change-password.php        # Change password page
├─ blood-requests.php         # Blood request management
├─ css/                       # CSS files (Bootstrap, FontAwesome, custom style)
├─ js/                        # JS files (jQuery, Bootstrap)
├─ images/                    # Images used in project
└─ blood.sql                  # Database dump file
```

---

## Installation Instructions

1. **Clone the repository**

```bash
git clone https://github.com/yourusername/Online-Blood-Donation-Management.git
cd Online-Blood-Donation-Management
```

2. **Setup database**

   * Open **phpMyAdmin** in your local server (XAMPP, WAMP, or MAMP).
   * Create a new database, e.g., `blood_bank`.
   * Import the `blood.sql` file:

     1. Go to your database in phpMyAdmin.
     2. Click **Import**.
     3. Choose the `blood.sql` file from your project folder.
     4. Click **Go** to import all tables and sample data.

3. **Update database connection**

   * Open `config.php` (or your database config file).
   * Update the following with your database credentials:

```php
$host = "localhost";
$dbname = "blood";
$username = "root";
$password = "";
```

4. **Run the project**

   * Place the project folder in `htdocs` (XAMPP) or `www` (WAMP).
   * Open your browser and go to `http://localhost/Online-Blood-Donation-Management`.

---

## Project Links(OBD&MS)

https://online-blood-donation.liveblog365.com/

---

## Technologies Used

* PHP
* MySQL / SQL Server
* HTML, CSS, Bootstrap
* jQuery, Font Awesome
* DataTables, Bootstrap Select

---

## Author

**Harsh Srivastava**

* Enrolment No.: 2105081384
* BCA Student, IGNOU
* Guide: Sneh Jeet Singh

---

## License

This project is for academic purposes only. Do not use it for commercial purposes without permission.


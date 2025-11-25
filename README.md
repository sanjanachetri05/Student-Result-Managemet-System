# 🎓 Student Result Management System (SRMS)

A simplified, web-based application designed to automate the management and declaration of student results. Built using the **LAMP/XAMPP** stack, this system serves as a digital bridge between the administration and students, replacing manual result declaration with an efficient online platform.

## 🚀 Features

### 👨‍🎓 User Panel (Student)
- **Instant Access:** No registration or login required.
- **Search Functionality:** Students can retrieve results instantly by entering their unique **Roll ID**.
- **Marksheet View:** Displays subject-wise marks, total score, and student details.
- **Print Support:** Built-in option to print or save the marksheet as a PDF.

### 🔒 Admin Panel
- **Secure Authentication:** Password-protected login system.
- **Dashboard:** Overview of all enrolled students.
- **Student List:** View details of students currently in the database.
- **Database Management:** Centralized control over student records and results via MySQL.

---

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3 (Simple, clean, and responsive UI)
- **Backend:** PHP (Server-side logic)
- **Database:** MySQL (Relational database)
- **Server:** Apache (via XAMPP/WAMP)

---

## 📂 Database Schema

The system uses a simplified **3-table structure** linked by a foreign key (`rollid`).

1. **`admin`**: Stores login credentials.
2. **`students`**: Stores personal details (Name, Class, Email, Roll ID).
3. **`results`**: Stores academic marks linked to the student via Roll ID.

---

## ⚙️ Installation & Setup

Follow these steps to run the project locally:

1. **Download the Project**
   - Clone this repository or download the ZIP file.
   - Extract the folder and rename it to `srms`.

2. **Move to Server Directory**
   - Move the `srms` folder to your server's root directory:
     - **XAMPP:** `C:\xampp\htdocs\`
     - **WAMP:** `C:\wamp64\www\`

3. **Import Database**
   - Open **PHPMyAdmin** (`http://localhost/phpmyadmin`).
   - Create a new database named `srms`.
   - Import the `database.sql` file provided in this repository.

4. **Run the Project**
   - Open your browser and go to: `http://localhost/srms`

---

## 🔑 Default Credentials

To access the Admin Panel, use the following default credentials:

- **Username:** `admin`
- **Password:** `admin`

*(Note: You can change these in the database or via the `change_password.php` page if implemented)*

---

## 🔮 Future Scope

- [ ] Implement a full CRUD (Create, Read, Update, Delete) UI for Admins.
- [ ] Add student login with profile history.
- [ ] Graphical analytics (Charts) for class performance.
- [ ] Email/SMS notifications for result declaration.

---

## 👥 Authors

- **Sanjana Chetri** 

---

⭐ **Star this repo if you find it useful!**

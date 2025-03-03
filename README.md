Web Application with xampp

Welcome to Web Application, a lightweight and dynamic web project built with PHP, MySQL, and Apache, running on XAMPP! 


Project Overview
This project serves as a basic template for web applications, featuring:
Frontend: HTML
Backend: PHP
Database: MySQL
Local Server: Apache (via XAMPP)

It’s perfect for beginners looking to understand how web applications work in a local development environment.

---

 Installation & Setup

 Prerequisites
Ensure you have XAMPP installed on your system. You can download it here: [XAMPP Download](https://www.apachefriends.org/download.html)


 Running the Application
1. Start Apache and MySQL in the XAMPP Control Panel.
2. Move the project folder to the `htdocs` directory inside the XAMPP installation folder.
3. Import the database:
   - Open `phpMyAdmin` (http://localhost/phpmyadmin/)
   - Create a new database (e.g., `form_test`)
   - Import `database.sql` from the project directory.
4. Open your browser and navigate to:
   ```
   http://localhost/simple-web-app/
   ```

---

Feature
.  form submitting Operations
.  file uploading 

---

 Project Structure
```bash
/simple-web-app
│── file_directory/         # saves files inputs from frontend
    │── saved_files
    │──file_frontend
    │──file_backend
│── form_frontend/         # user veiw
    │── frontend
│── form_backend/            # Database connection
    │── backend

```

---

Contributing
Feel free to fork this repository, enhance it, and submit pull requests. All contributions are welcome! 🎉

---

License
This project is licensed under the Apache-2.0.

---

Contact
Have questions or suggestions? Reach out to me at senthalan.sk@gmail.com or open an issue!

Happy Coding! 🚀


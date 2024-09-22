# PHP Authentication System

This project is a basic PHP-based authentication system that includes sign-up, login, and logout functionalities. It also handles user input validation and error display.

## Features

- **User Registration (Sign-Up)**: Users can create a new account by providing a username, email, and password.
- **User Login**: Users can log in with their registered email and password.
- **Logout**: A logout button is available to allow users to end their session.
- **Error Handling**: Proper error messages are displayed for empty fields, invalid emails, and already registered usernames or emails.

## Project Structure

. ├── index.php # Main page for sign-up and login forms ├── includes │ ├── config_session.inc.php # Session configuration file │ ├── dbh.inc.php # Database connection handler │ ├── signup.inc.php # Sign-up form submission logic │ ├── login.inc.php # Login form submission logic │ ├── logout.inc.php # Logout functionality │ ├── signup_view.inc.php # Sign-up form view │ ├── login_view.inc.php # Login form view ├── README.md # Project documentation └── db.sql # SQL file to create the required database table

## Requirements

- PHP 7.4+
- MySQL
- Web server (e.g., Apache, Nginx)
- Tailwind CSS (for styling the forms)

## Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/php-auth-system.git
cd php-auth-system
```

### 2. Database Setup

Create a database in MySQL (e.g., auth_system).
Import the provided SQL file db.sql to create the necessary tables.

CREATE TABLE users (
id INT(15) NOT NULL AUTO_INCREMENT,
username VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
pwd VARCHAR(255) NOT NULL,
created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
);

### 3. Configuration

Modify the dbh.inc.php file to add your database connection details:

<?php
$host = 'localhost';
$db = 'auth_system';  // your database name
$user = 'root';       // your database username
$pass = '';           // your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

### 4. Running the Project

Start your local server (Apache or Nginx).
Open the project in your browser (e.g., http://localhost/php-auth-system).
You should see both the Sign Up and Login forms on the main page.

### 5. Sign-Up and Login

Sign-Up: Enter a unique username, a valid email, and a password to create an account.
Login: Log in using your registered email and password.
Logout: After logging in, you will see a logout button at the top of the page to end your session.

### 6. Error Handling

The system includes error handling for the following:

Empty fields
Invalid email format
Username already taken
Email already registered
Logout Functionality
Once a user is logged in, they can click the Logout button, which ends their session and redirects them to the login page.

### 7. Technologies Used

PHP: Backend logic for authentication.
MySQL: Database to store user details.
Tailwind CSS: For styling the sign-up and login forms.
PDO: To handle secure database interactions

## Key Sections:

1. **Features**: Describes the functionality provided.
2. **Project Structure**: Explains the directory structure and purpose of each file.
3. **Setup Instructions**: Step-by-step guide to set up the project, including cloning, database setup, and configuration.
4. **Running the Project**: Instructions to start the project on a local server.
5. **Technologies Used**: Lists the core technologies utilized.
6. **License**: If you have a license, it could be mentioned here.

Let me know if you'd like further modifications!

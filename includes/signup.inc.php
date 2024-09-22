<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';


        // Error Handlers
        $errors = [];

        if (is_input_empty($username, $email, $pwd)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        if (is_email_inavalid($email)) {
            $errors["invalid_email"] = "Invalid email used!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken!";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "Email already registered!";
        }
        if (is_username_valid($username)) {
            $errors["invalid_username"] = "Username must be in lowercase!";
        }
        if (is_username_length($username)) {
            $errors["invalid_username_length"] = "Username must conatin 5 character!";
        }
        if (is_password_valid($pwd)) {
            $errors["invalid_password_length"] = "Password must contain 6 character";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;

            $signup_data = [
                'username' => $username,
                'email' => $email
            ];

            $_SESSION["signup_data"] = $signup_data;

            header("location: ../index.php");

            die();
        }

        create_user($pdo, $username, $email, $pwd);

        header("location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("location: ../index.php");
    die();
}

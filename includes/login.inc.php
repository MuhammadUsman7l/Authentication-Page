<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["email"];
    $pwd = $_POST["password"];
    try {

        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';

        // Errors Handler
        $errors = [];

        if (is_input_empty($email, $pwd)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        if (is_email_inavalid($email)) {
            $errors["invalid_email"] = "Invalid email used!";
        }
        $result = get_user($pdo, $email);
        if (is_email_wrong($result)) {
            $errors["not_email"] = "User with such email is not present!";
        }

        if (!is_email_wrong($result) && is_password_wrong($pwd, $result["pwd"])) {
            $errors["wrong_password"] = "Incorrect Password!";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_login"] = $errors;
            header("location: ../index.php");

            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "-" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["username"] = $result["username"];

        $_SESSION["last_regeneration"] = time();

        header("location: ../index.php?login=success");

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

<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pwd)
{

    if (empty($username) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

function is_email_inavalid(string $email)
{

    if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_password_valid(string $pwd)
{
    $length = strlen($pwd);
    if (!empty($pwd) && $length < 6) {
        return true;
    } else {
        return false;
    }
}

function is_email_wrong(bool|array $result)
{

    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(string $pwd, string $hashedPwd)
{

    if (!password_verify($pwd, $hashedPwd)) {
        return true;
    } else {
        return false;
    }
}

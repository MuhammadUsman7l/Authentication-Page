<?php

declare(strict_types=1);


function is_input_empty(string $username, string $email, string $pwd)
{

    if (empty($username) || empty($email) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

function is_username_valid(string $username)
{

    if (!empty($username) && !preg_match('/^[a-z0-9]+$/', $username)) {
        return true;
    } else {
        return false;
    }
}

function is_username_length(string $username)
{
    $length = strlen($username);
    if (!empty($username) && $length < 5) {
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

function is_email_inavalid(string $email)
{

    if ($email && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function is_username_taken(object $pdo, string $username)
{

    if (get_username($pdo, $username)) {
        return true;
    } else {
        return false;
    }
}

function is_email_registered(object $pdo, string $email)
{

    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

function create_user(object $pdo, string $username, string $email, string $pwd)
{
    set_user($pdo, $username, $email, $pwd);
}

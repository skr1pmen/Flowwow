<?php
session_start();
require "./db.php";

$login = $_POST['login'];
$password = $_POST['password'];

$user = select('SELECT * FROM users WHERE login = :login', ['login' => $login]);
if (!empty($user)){
    if (password_verify($password, $user[0]['password'])){
        $_SESSION['user_id'] = $user[0]['id'];
        header("Location: ../pages/profile.php?id=".$user[0]['id']);
    } else {
        $_SESSION['error'] = 'Не правильный пароль!';
        header("Location: ../pages/login.php");
    }
} else {
    $_SESSION['error'] = 'Такого пользователя не существует!';
    header("Location: ../pages/login.php");
}
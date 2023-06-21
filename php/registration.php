<?php
session_start();
require "./db.php";

$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$login = $_POST['login'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
$type = $_FILES['avatar']['type'];
$avatar = file_get_contents($_FILES['avatar']['tmp_name']);

if ($password != $repeat_password){
    $_SESSION['error'] = "Пароли не совпадают!";
    header('Location: ../pages/registration.php');
}
else{
    $id = insert(
        'INSERT INTO users (name, surname, patronymic, login, password, type, avatar)
            VALUES (:name, :surname, :patronymic, :login, :password, :type, :avatar)',
        [
            'name' => $name,
            'surname' => $surname,
            'patronymic' => $patronymic,
            'login' => $login,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'type' => $type,
            'avatar' => base64_encode($avatar)
        ]
    );
    $_SESSION['user_id'] = $id;
    header('Location: ../pages/profile.php?id=' . $id);
}
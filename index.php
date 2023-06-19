<?php
session_start();
?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./assets/styles/index.css">
        <title>Flowwow | Главная</title>
    </head>
    <body>
        <?php require './modules/header.php'?>
        <div class="container">
            <div class="w_block">
                <div class="title">Подарите счастье,<br>а мы доставим его через 30 минут!</div>
                <a class="btn" href="#">Заказать сейчас!</a>
                <img class="women" src="./assets/images/WomenHome.png" alt="women">
            </div>
        </div>
    </body>
</html>

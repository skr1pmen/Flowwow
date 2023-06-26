<?php
session_start();
require '../php/db.php';
?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Профиль</title>
    </head>
    <body>
        <?php require '../modules/header.php'; ?>
        <form action="../php/exit.php"><input type="submit" value="Выход"></form>
    </body>
</html>
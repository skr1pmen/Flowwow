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
        <link rel="stylesheet" href="../assets/styles/add_products.css">
        <title>Flowwow | Добавление товара</title>
    </head>
    <body>
        <?php require '../modules/header.php'?>
        <div class="container">
            <div class="back" onclick="history.back()">Назад</div>
            <form action="../php/add_products.php" method="post" enctype="multipart/form-data">
                <div class="input_box">
                    <input type="text" name="name" id="name" required>
                    <label for="name">Название товара:</label>
                </div>
                <textarea placeholder="Описание товара" name="description" cols="90" rows="15" class="desc"></textarea>
                <label for="select">Укажите тип товара:</label>
                <select name="type" id="select">
                    <option value="flowers">Цветы</option>
                    <option value="sweets">Сладости</option>
                </select>
                <div class="input_box">
                    <input type="text" name="price" id="price" required>
                    <label for="price">Цена товара:</label>
                </div>
                <div class="input_box">
                    <input type="text" name="count" id="count" required>
                    <label for="count">Количество товара:</label>
                </div>
                <input type="file" name="image">
                <input class="btn" type="submit" value="Добавить товар">
            </form>
        </div>
    </body>
</html>
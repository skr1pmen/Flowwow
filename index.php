<?php
session_start();
include "./php/db.php";
$flowers = select('select * from flowers ORDER BY RANDOM() LIMIT 9');
$sweets = select('select * from sweets ORDER BY RANDOM() LIMIT 9');
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
                <a class="btn" href="#shop">Заказать сейчас!</a>
                <img class="women" src="./assets/images/WomenHome.png" alt="women">
            </div>
            <div class="shop" id="shop">
                <div class="title">Некоторые наши товары</div>
                <div class="products_title">Цветы</div>
                <div class="products">
                    <?php if (!empty($flowers)): foreach ($flowers as $flower):?>
                            <div class="product">
                                <img src="data:<?=$flower['type']?>;base64, <?=$flower['image']?>" alt="">
                                <div class="product_title"><?= $flower['name'] ?></div>
                                <div class="desc"><?= $flower['description'] ?></div>
                                <span class="price"><?= $flower['price'] ?>₽</span>
                                <a class="btn-product" href="./pages/flower.php?id=<?= $flower['id'] ?>">Подробнее</a>
                            </div>
                        <?php endforeach; endif; ?>
                    <a href="#" class="product last">
                        <span>Другие товары</span>
                    </a>
                </div>
                <div class="products_title">Сладости</div>
                <div class="products">
                    <?php if (!empty($sweets)): foreach ($sweets as $sweet):?>
                            <div class="product">
                                <img src="data:<?=$sweet['type']?>;base64, <?=$sweet['image']?>" alt="">
                                <div class="product_title"><?= $sweet['name'] ?></div>
                                <div class="desc"><?= $sweet['description'] ?></div>
                                <span class="price"><?= $sweet['price'] ?>₽</span>
                                <a class="btn-product" href="./pages/sweet.php?id=<?= $sweet['id'] ?>">Подробнее</a>
                            </div>
                    <?php endforeach; endif; ?>
                    <a href="#" class="product last">
                        <span>Другие товары</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>

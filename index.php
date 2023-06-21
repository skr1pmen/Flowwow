<?php
session_start();
require "./php/db.php";

//$result = select('select * from flowers',[]);
//var_dump($result);
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
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <a href="#" class="product last">
                        <span>Другие товары</span>
                    </a>
                </div>
                <div class="products_title">Сладости</div>
                <div class="products">
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <div class="product">
                        <img src="https://dostavka-tsvety.ru/wp-content/uploads/2020/09/1-6-1-39.jpg" alt="">
                        <div class="product_title">Название</div>
                        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut consequatur consequuntur, delectus dolor expedita explicabo illo ipsam magni minima minus molestias numquam omnis optio perspiciatis provident quaerat quisquam, quos rerum ullam velit vitae, voluptates?</div>
                        <span class="price">1500₽</span>
                        <a class="btn-product" href="#">Подробнее</a>
                    </div>
                    <a href="#" class="product last">
                        <span>Другие товары</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>

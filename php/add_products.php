<?php
session_start();
require './db.php';

$name = $_POST['name'];
$desc = $_POST['description'];
$type = $_POST['type'];
$price = (int)$_POST['price'];
$count = (int)$_POST['count'];
$image_type = $_FILES['image']['type'];
$image = file_get_contents($_FILES['image']['tmp_name']);
if ($type == 'flowers'){
    insert(
        "INSERT INTO flowers (name, description, price, count, type, image) VALUES 
                                                                       (:name, :desc, :price, :count, :type, :image)",
        [
            'name' => $name,
            'desc' => $desc,
            'price' => $price,
            'count' => $count,
            'type' => $image_type,
            'image' => base64_encode($image)
        ]
    );
}
else{
    insert(
        "INSERT INTO sweets (name, description, price, count, type, image) VALUES 
                                                                      (:name, :desc, :price, :count, :type, :image)",
        [
            'name' => $name,
            'desc' => $desc,
            'price' => $price,
            'count' => $count,
            'type' => $image_type,
            'image' => base64_encode($image)
        ]
    );
}
header('Location: ../');
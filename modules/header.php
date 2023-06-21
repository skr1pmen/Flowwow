<?php
session_start();

if ($_SERVER['REQUEST_URI'] != '/'){
    $url_home = "../";
    $url_flower = "../pages/flowers.php";
    $url_sweets = "../pages/sweets.php";
    $url_added = "../pages/add_products.php";
    require '../php/db.php';
}
else{
    $url_home = './';
    $url_flower = './pages/flowers.php';
    $url_sweets = './pages/sweets.php';
    $url_added = './pages/add_products.php';
    require './php/db.php';
}

if (!empty($_SESSION['user_id'])){
    $avatar_type = select("SELECT avatar, type FROM users WHERE id = :id",['id'=>$_SESSION['user_id']]);
    $img = 'data:'.$avatar_type[0]['type'].';base64, '.$avatar_type[0]['avatar'];
    if ($_SERVER['REQUEST_URI'] != '/'){
        $url_profile = './profile.php?id='.$_SESSION['user_id'];
    }
    else{
        $url_profile = './pages/profile.php?id='.$_SESSION['user_id'];
    }
}
else{
    $img = '../assets/images/default_profile.png';
    if ($_SERVER['REQUEST_URI'] != '/') {
        $url_profile = './login.php';
    }
    else{
        $url_profile = './pages/login.php';
    }
}

?>
<link rel="stylesheet" href="../assets/styles/header.css">
<header>
    <div class="container">
        <a class="logo" href="<?=$url_home?>"><img src="../assets/images/logo.svg" alt=""></a>
        <nav>
            <a href="<?=$url_home?>">Главная</a>
            <a href="<?=$url_flower?>">Цветы</a>
            <a href="<?=$url_sweets?>">Сладости</a>
            <?php if (!empty($_SESSION['is_admin'])): ?>
                <a href="<?=$url_added?>">Добавить товар</a>
            <?php endif;?>
        </nav>
        <a class="user" href="<?=$url_profile?>"><img src="<?=$img?>" alt=""></a>
    </div>
</header>
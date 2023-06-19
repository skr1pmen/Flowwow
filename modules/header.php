<?php
session_start();
$_SESSION['user_id'] = 12;

if ($_SERVER['REQUEST_URI'] != './'){
    $url_home = "../";
}
else{
    $url_home = './';
}

if (!empty($_SESSION['user_id'])){
    $url_profile = './pages/profile.php?id='.$_SESSION['user_id'];
}
else{
    $url_profile = './pages/login.php';
}


?>
<link rel="stylesheet" href="../assets/styles/header.css">
<header>
    <div class="container">
        <a class="logo" href="<?=$url_home?>"><img src="../assets/images/logo.svg" alt=""></a>
        <nav>
            <a href="">Главная</a>
            <a href="">Цветы</a>
            <a href="">Сладости</a>
        </nav>
        <a class="user" href="<?=$url_profile?>"><img src="../assets/images/default_profile.png" alt=""></a>
    </div>
</header>
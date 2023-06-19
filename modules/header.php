<?php
session_start();
$_SESSION['user_id'] = 12;
//unset($_SESSION['user_id']);

if ($_SERVER['REQUEST_URI'] != './'){
    $url_home = "../";
}
else{
    $url_home = './';
}

if (!empty($_SESSION['user_id'])){
    if ($_SERVER['REQUEST_URI'] != './'){
        $url_profile = './pages/profile.php?id='.$_SESSION['user_id'];
    }
    else{
        $url_profile = './profile.php?id='.$_SESSION['user_id'];
    }

}
else{
    if ($_SERVER['REQUEST_URI'] != './') {
        $url_profile = './pages/login.php';
    }
    else{
        $url_profile = './login.php';
    }
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
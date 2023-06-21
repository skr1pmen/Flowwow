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
    <link rel="stylesheet" href="../assets/styles/forms.css">
    <title>Авторизация</title>
</head>
<body>
    <form action="../php/login.php" method="post">
        <?php if (!empty($_SESSION['error'])): ?>
            <div class="message">
                <span>Внимание!</span>
                <?= $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <? endif; ?>
        <div class="input_box">
            <input type="text" name="login" id="login" required>
            <label for="login">Логин:</label>
        </div>
        <div class="input_box">
            <input type="text" name="password" id="password" required>
            <label for="password">Пароль:</label>
        </div>
        <input class="btn" type="submit" value="Авторизоваться">
        <span>Нет аккаунта?<a href="./registration.php">Зарегистрируй!</a></span>
    </form>
</body>
</html>

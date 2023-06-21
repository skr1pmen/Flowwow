<?php session_start() ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/styles/forms.css">
    <title>Регистрация</title>
</head>
<body>
    <form method="post" action="../php/registration.php" enctype="multipart/form-data">
        <?php if (!empty($_SESSION['error'])): ?>
            <div class="message">
                <span>Внимание!</span>
                <?= $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <? endif; ?>
        <div class="input_box">
            <input type="text" name="name" id="name" required>
            <label for="name">Имя:</label>
        </div>
        <div class="input_box">
            <input type="text" name="surname" id="surname" required>
            <label for="surname">Фамилия:</label>
        </div>
        <div class="input_box">
            <input type="text" name="patronymic" id="patronymic" required>
            <label for="patronymic">Отчество:</label>
        </div>
        <div class="input_box">
            <input type="text" name="login" id="login" required>
            <label for="login">Логин:</label>
        </div>
        <div class="input_box">
            <input type="password" name="password" id="password" required>
            <label for="password">Пароль:</label>
        </div>
        <div class="input_box">
            <input type="password" name="repeat_password" id="repeat_password" required>
            <label for="repeat_password">Повторите пароль:</label>
        </div>
        <div class="input_box">
            <input type="file" name="avatar" id="avatar" required>
        </div>
        <input class="btn" type="submit" value="Зарегистрироваться">
        <span>Есть аккаунт?<a href="./login.php">Авторизуйся!</a></span>
    </form>
</body>
</html>

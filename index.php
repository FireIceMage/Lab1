<?php
session_start();

if ($_SESSION['user']){
    header('Location: includes/profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <! -- Форма авторизации -->

    <form action="includes/signin.php" method="post">
        <div class="container">
            <h1 class="aut">Авторизация</h1>
            <p class="aut">Пожалуйста заполните эту форму для авторизации</p>
            <hr>

            <label for="Логин">
                <b>Логин</b>
            </label>
            <input type="text" placeholder="Введите ваш логин" name="login" required>
            <hr>

            <label for="Пароль">
                <b>Пароль</b>
            </label>
            <input type="password" placeholder="Введите ваш пароль" name="password" required>
            <hr>

            <button type="submit" class="btn">Войти</button>

            <p class="aut"> Нету аккаунта? - <a href="register.php">Зарегистрируйтесь</a>.</p>

            <?php
            if ($_SESSION['message']){
                echo '<p class="msg"> ' . $_SESSION['message'] . '  </p>';
            }
            unset($_SESSION['message']);
            ?>
        </div>
    </form>
</body>
</html>
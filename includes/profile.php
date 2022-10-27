<?php
session_start();

    if (!$_SESSION['user']){
        header('Location: /');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <form>
        <div class="container">
            <h2 class="aut">Hello, <?= $_SESSION['user']['name'] ?>.</h2>
            <hr>
            <a href="logout.php" class="aut">
                <div class="aut">Выйти</div>
            </a>
        </div>
    </form>
</body>
</html>



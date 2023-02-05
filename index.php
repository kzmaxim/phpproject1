<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мое изучение PHP</title>
</head>
<body>
    <?php
    include "template/header.php";
    ?>
    <ul>
        <li><a href="test.php">include, require<br></a></li>
        <li><a href="engine/php_functions.php">Встроенные функции в PHP</a></li>
        <li><a href="engine/get_post.php">HTTP передача данных</a></li>
        <li><a href="files.php">Работа с файлами</a></li>
        <li><a href="engine/session.php">Сессии</a></li>
        <li><a href="engine/team.php">База данных</a></li>
    </ul>
    <?php
    require "engine/team.php";
    require "template/footer.php";
    ?>
</body>
</html>

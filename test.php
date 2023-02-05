<?php

session_start();
/***********************************************************************************************************/
// Как сделать выбор года рождения:
//**********************************************************************************************************/
// $year = 1922;
// echo "<select>";
// while($year <= 2022) {
//     echo "<option value=".$year.">$year</option>";
//     $year++;
// }
// echo "</select>";
//**********************************************************************************************************/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <?php
    include "template/header.php"; 
    ?>
    <?php 
        if(!empty($_SESSION['access']) && $_SESSION['access'] == 'admin') {
            echo 'Добро пожаловать, админ!';
        } else {
            echo 'Вы не админ!';
        }
    ?>
    <a href="engine/session.php">session</a>
    <a href="index.php">На главную</a>
    <?php
    echo 'Страница Админки';
    require "template/footer.php";
    ?>
</body>
</html>


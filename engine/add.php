<?php
require_once "db.php";

if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = mysqli_real_escape_string($db, $value);
    }
    extract($_POST);


    $insert = "INSERT INTO `test_db` (`name`, `gmail`, `data`) VALUES ('$name', '$gmail', '$data')";

    $query = mysqli_query($db, $insert);

    if ($query) {
        header('Location: /php/index.php');
    } else {
        die('Ошибка');
    }
}
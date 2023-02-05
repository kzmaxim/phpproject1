<?php

require_once "db.php";

if(!empty($_GET['id_member'])) {
    $id = (int) $_GET['id_member'];

    $delete = "DELETE FROM `test_db` WHERE `id` = $id";
    $query = mysqli_query($db, $delete);
    if ($query) {
        header('Location: /php/index.php');
    } else {
        die('Ошибка');
    }
}


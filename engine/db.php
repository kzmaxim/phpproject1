<?php 
$db = @mysqli_connect('localhost', 'root', '', 'test') or die('DB connection error');
mysqli_set_charset($db, 'utf8') or die('Не правильная кодировка');
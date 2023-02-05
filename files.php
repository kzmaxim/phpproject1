<h1>Функции для работы с файлами в PHP</h1>
<form method="POST" action="" enctype="multipart/form-data">
    <p><input type="text" name="title"></p>
    <p><input type="file" name="file"></p>
    <button>Submit</button>
</form>
<hr>
<?php

// move_uploaded_file
echo '<h2>move_uploaded_file</h2>';
echo '<p>Переносит файл из временного хранилища в постоянное</p>';
if (!empty($_FILES)) {
    move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$_FILES['file']['name']);
}
echo '<hr>';

// file_exists
echo '<h2>file_exists</h2>';
echo '<p>Проверяет, существует ли файл</p>';

// rename

?>
<h1><a href="index.php">На главную</a></h1>

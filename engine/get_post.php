<a href="../index.php"><h1>На главную</h1></a>
<h1>HTTP передача данных</h1>
<?php
// $_GET
echo '<h2>$_GET</h2>';
print_r($_GET);
?>
<form action="">
    <input type="text" name="name1">
    <input type="text" name="name2">
    <input type="text" name="name3">
    <button>Submit</button>
</form>
<?php
// $_POST
echo '<h2>$_POST</h2>';
$name = htmlspecialchars($_POST['name'] ?? '');
echo 'Ваше имя: ' . $name . '<br>';
$id = (int)($_POST['id'] ?? '');
echo 'Ваше id: ' . $id . '<br>';

?>
<form method="POST"action="">
    <input type="text" name="name">
    <input type="text" name="id">
    <input type="text" name="name3">
    <button>Submit</button>
</form>

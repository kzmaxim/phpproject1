<a href="../index.php"><h1>На главную</h1></a>
<h2>Для работы со строками:</h2>
<p>----------------------------------------------------------------------------</p>
<?php 
// trim
echo "<h2>1. trim</h2>";
$message_trim = '  Hello, world!    ';
var_dump($message_trim);
$result_trim = trim($message_trim);
var_dump($result_trim);
echo '----------------------------------------------------------------------------------<br>';

//strip_tags
echo "<h2>2. strip_tags</h2>";
$message_st = '<h1>Hello, world!</h1>';
echo $message_st;
$result_st = strip_tags($message_st);
echo $result_st . '<br>';
echo '----------------------------------------------------------------------------------<br>';

//htmlspescialchars
echo "<h2>3. htmlspecialchars</h2>";
$message_htmlsch = '<h1><strong>Hello</strong>, World!</h1><script>alert("test")</script>';
echo htmlspecialchars($message_htmlsch) . '<br>';
echo '(если бы не htmlspecialchars, то сработал бы скрипт)<br>';
echo '----------------------------------------------------------------------------------<br>';

//str_repalce
echo "<h2>4. str_replace</h2>";
$message_replace = 'Привет всем! Как у вас дела?';
echo $message_replace . '<br>';
echo 'А теперь заменим букву "а" на букву "Z":<br>';
$result_replace = str_replace('а', 'Z', $message_replace);
echo $result_replace . '<br>';
echo '----------------------------------------------------------------------------------<br>';

//strtoupper, strtolower
echo "<h2>5. strtoupper, strtolower</h2>";
$message_upper = 'upper';
$message_lower = 'LOWER';
echo $message_upper . '<br>';
echo $message_lower . '<br>';
echo 'Теперь переделаем регистр на правильный:<br>';
echo strtoupper($message_upper) . '<br>';
echo strtolower($message_lower) . '<br>';
echo '----------------------------------------------------------------------------------<br>';

//strlen, mb_strlen
echo "<h2>6. strlen, mb_strlen</h2>";
$message_len = 'Это текст';
echo $message_len . '<br>';
echo 'Длина данного текста: ' . strlen($message_len) . '(в байтах)' . '<br>';
echo 'Длина данного текста: ' . mb_strlen($message_len) . '(не в байтах)' . '<br>';
echo '----------------------------------------------------------------------------------<br>';

//strpos, mb_strpos
echo "<h2>7. strpos, mb_strpos</h2>";
$message_pos = 'В этой строке буква "ж" на позиции 21:' . '<br>';
echo $message_pos;
echo mb_strpos($message_pos, 'ж') . '<br>';
echo '----------------------------------------------------------------------------------<br>';

//substr, mb_substr
echo "<h2>8. substr, mb_substr</h2>";
$message_substr = 'На позиции 7 находится буква:<br>';
echo $message_substr;
echo mb_substr($message_substr, '7', 1) . '<br>';
echo '----------------------------------------------------------------------------------<br>';
?>
<h2>Для работы с датой и временем:</h2>
<p>----------------------------------------------------------------------------</p>
<?php 
//date
echo "<h2>1. date</h2>";
echo 'Время: ' . date('Y-m-d H:i:s') . '<br>';
echo '----------------------------------------------------------------------------------<br>';
?>



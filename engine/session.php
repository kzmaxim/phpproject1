<?php

session_start();

define('ADMINISTRATOR', '12345');

if(!empty($_POST['password']) && $_POST['password'] === ADMINISTRATOR) {
    $_SESSION['access'] = 'admin';
} else {
    $_SESSION['access'] = 'not_admin';
}

if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    session_unset();
    header('Location: session.php');
}

?>
<a href="../test.php">test</a>
<form action="" method="POST">
    <input type="password" name="password">
    <button>Login</button>
</form>
<a href="session.php?logout=1">Logout</a>
<?php
session_start();
$_SESSION['username'] = '';
$_SESSION['lvl'] = '';
unset($_SESSION['username']);
unset($_SESSION['lvl']);
session_unset();
session_unset();
session_destroy();
session_destroy();
header("location:index.php");
?>

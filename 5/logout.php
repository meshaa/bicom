<?php
include("miscFunctions.php");
session_start();

unset($_SESSION['data']);
unset($_COOKIE['giris']);
setcookie("giris","",time()-3600);

header("location: index.php");


?>

<?php

session_start();
session_destroy();
unset($_SESSION["user_id"]);
unset($_SESSION["username"]);
$url = "index.php";
header("Location:$url");
?>


<?php

include 'db.php';

$user_id = $_GET['user_id'];

$q = " DELETE FROM `registration` WHERE user_id = $user_id ";

mysqli_query($con,$q);

header('location:Member.php');

?>
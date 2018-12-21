<?php

include 'db.php';

$id = $_GET['id'];

$q = " DELETE FROM `contact` WHERE id = $id ";

mysqli_query($con,$q);

header('location:message.php');

?>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_post['registration'])){
	$firstname = mysql_real_escape_string($_post['firstname']);
	$lastname = mysql_real_escape_string($_post['lastname']); 
	$phone = mysql_real_escape_string($_post['phone']);
	$address = mysql_real_escape_string($_post['address']);
	$username = mysql_real_escape_string($_post['username']);
	$password = mysql_real_escape_string($_post['password']); 
	$confirm_password = mysql_real_escape_string($_post['confirm_password']);
	if (empty($firstname)){
		array_push($errors,"firstname is required");
	}
	if (empty($lastname)){
		array_push($errors,"lastname is required");
	}
	if (empty($phone)){
		array_push($errors,"phone is required");
	}
    if (empty($address)){
		array_push($errors,"address is required");
	}
	if (empty($username)){
		array_push($errors,"username  is required");
	}
		if (empty($password)){
		array_push($errors,"password is required");
	}
	if($password != $confirm_password){
		array_push($errors,"The two password is do not match");
	}
	if(count($errors) == 0){
		$password = md5($password); 
		$sql = "INSERT INTO users (firstname,lastname,phone,address,username,password) VALUES ('$firstname','$lastname','$phone','$address','$username','$password')";
		mysql_query($db,$sql);

		
	}


}


?>
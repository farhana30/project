<?php

  include 'db.php';

 if(isset($_POST['done'])){
  $user_id =$_GET['user_id'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $address =$_POST['address'];
  $username = $_POST['username'];
  $password = $_POST['password'];
$q = $q = " update registration set user_id=$user_id,firstname='$firstname', lastname='$lastname',phone='$phone',address='$address',username='$username',password='$password' where user_id=$user_id  ";

  $query = mysqli_query($con,$q);

   header('location:Member.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <link rel="stylesheet" type="text/css" href="login_registration-style.css">
</head>
<body>

  <div class="header">
  <h1>Update Member</h1>
</div>
  <form  method="post">
 
  <fieldset>
   <div class="input-group">
    <label> Firstname: </label>
    <input type="text" name="firstname" class="form-control"> <br>
     <label> Lastname: </label>
    <input type="text" name="lastname" class="form-control"> <br>
     <label> Phone: </label>
    <input type="text" name="phone" class="form-control"> <br>
     <label> Address: </label>
    <input type="text" name="address" class="form-control"> <br>

     <label> Username: </label>
    <input type="text" name="username" class="form-control"> <br>

     <label> Password: </label>
    <input type="text" name="password" class="form-control"> <br>

     <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

    </div>
  </form>
 
</body>
</html>
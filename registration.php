
<?php

include 'db.php';

if(isset($_POST['done'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $address =$_POST['address'];
  $email = $_POST['email'];
  $usertype = $_POST['role'];
  $password = $_POST['password'];
  $con_password = $_POST['con_password'];
 $q = "INSERT INTO `registration`(`firstname`, `lastname`, `phone`, `address`, `email`,`usertype`,`password`)  VALUES('$firstname','$lastname','$phone','$address','$email','$usertype','$password')";

 if ($password === $con_password) {
  if (strlen($password) >= 8) {
    $query = mysqli_query($con,$q);
  }else{
    echo '<div class="alert alert-danger"><strong>Failed!</strong> Password must be at least 8 charecter!.</div>';
  }
  
  
 }else{
  echo '<div class="alert alert-danger"><strong>Failed!</strong> Password not matched!.</div>';
 }

  
}
?>

<!DOCTYPE html>
<html>
<head>
 

 
  <title>registration form</title>
  <link rel="stylesheet" type="text/css" href="login_registration-style.css">
  
</head>
<body>
 <div class="header">
  <h1>Registration</h1>
</div>
  <form action="registration.php"  method="post">
 
  <fieldset>
   <div class="input-group">
    <div class="row col-sm-12">
      <label> Firstname: </label>
    <input type="text" name="firstname" class="form-control" required=""> <br>
    </div>
    <div class="input-group">
        <label> Lastname: </label>
        <input type="text" name="lastname" class="form-control" required=""> <br>
    </div>
    <div class="input-group">
      <label> Phone: </label>
    <input type="text" name="phone" class="form-control" required=""> <br>
    </div>
   <div class="input-group">
       <label> Address: </label>
    <input type="text" name="address" class="form-control" required=""> <br>
    </div>
    
<div class="input-group">
        <label> Email: </label>
    <input type="email" name="email" class="form-control" required=""> <br>
     </div>
     <div class="input-group">
      <label> Usertype: </label>
      <select name="role" class="form-control" required="">
        <option value="user">As User</option>
        <option value="admin" disabled=""> As Admin / Invitation Only</option>
      </select> <br>
     </div>

     <div class="input-group">
       
     <label> Password: </label>
    <input type="password" name="password" class="form-control" required=""> <br>
    <br>
     </div>

<div class="input-group">
       
     <label>Confirm Password: </label>
    <input type="password" name="con_password" class="form-control" required=""> <br>
    <br>
     </div>
<div class="input-group">
     <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
     </div>

    
    


  <p>
    <br>
  Already a member? <a href="login.php">Sign In</a>
</p>
</fieldset>

    </div>
  </form>
</body>
</html>
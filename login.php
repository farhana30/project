<?php
include 'db.php';
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if($_POST['role'] === "user"){
     $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
     $result =mysqli_query($con, $sql);

    if (mysqli_num_rows($result) >= 0) {
        
        while($row = $result->fetch_assoc()) {
            if ($row['usertype'] === "user") {
                          session_start();
              $_SESSION['email'] = $row['email'];
              header('Location: user.php');
            }else{
              echo "Login information not correct!";
            }

                
            
          

        }
    } else {
        echo "0 results";
    }



} else if($_POST['role'] === "admin"){
     $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
     $result =mysqli_query($con, $sql);

    if (mysqli_num_rows($result) >= 0) {
        
        while($row = $result->fetch_assoc()) {
            if ($row['usertype'] === "admin") {
              session_start();
              $_SESSION['email'] = $row['email'];

              header('Location: admin.php');
            }else{
              echo "Login information not correct!";
            }

                
            
          

        }
    } else {
        echo "0 results";
    }


}
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login_registration-style.css">
<title>Login</title>
</head>
 <body>
 	<a href="index.php" class="up">Home</a>
  <div class="header">
  <h1>Login</h1>
</div>
<form method="POST">

     <div class="input-group">
       
     <label> Email: </label>
    <input type="email" name="email" class="form-control" required=""> <br>
    <br>
     </div>

    <div class="input-group">
       
     <label>Password: </label>
    <input type="password" name="password" class="form-control" required=""> <br>
    <br>
     </div>

      <div class="input-group">
      <label> Usertype: </label>
      <select name="role" class="form-control" required="">
        <option value="user">As User</option>
        <option value="admin"> As Admin</option>
      </select> <br>
     </div>
     <br>

<div class="input-group">
     <button class="btn btn-success" type="submit" name="login"> Login </button><br>
     </div>

<p>
  Not yet a member? <a href="registration.php">Sign Up</a>
</p>
</form>
</body>
</html>
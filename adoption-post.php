<?php

include 'db.php';

if(isset($_POST['done'])){
  $adopter_name = $_POST['adopter_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $cat_gender = $_POST['cat_gender'];
  $cat_age = $_POST['cat_age'];
  $breed_type = $_POST['breed_type'];
  $potty_trained = $_POST['potty_trained'];
    $vaccinated = $_POST['vaccinated'];
   $message = $_POST['message'];
 echo $q = " INSERT INTO `adopting-post`(`adopter_name`, `phone`, `email`, `address`, `cat_gender`, `cat_age`, `breed_type`, `potty_trained`, `vacinated`, `message`) VALUES('$adopter_name','$phone','$email','$address','$cat_gender','$cat_age','$breed_type','$potty_trained','$vaccinated','$message')";

  $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>cat adoption</title>
  <link rel="stylesheet" type="text/css" href="dstyle.css">
<body>
  <section id="page"> 
            <header> 
            <hgroup>
                    <h1>Cat Adoption</h1>
                    <h3>"You can't own a cat.The best you can be partners."</h3>
                </hgroup>
                                
                <nav class="clear"> 
                    <ul>
                       <li> <a class="active"  href="user.php">Home </a></li>
                        <li> <a class="active" href="help.php">Help </a></li>
      <li> <a class="active" href="Contact.php">Contact</a></li>
                      <li> <a class="active" href="donate-cat.php">Donate Cat </a></li>
                     <li> <a class="active" href="adoption-post.php">Adopt-cat </a></li>
                     <li><a class="active" href="post.php">Want Cat</a></li>
                     <li> <a class="active" href="cat-collection.php">Cat-Collection</a></li>
                    <li> <a class="activee" href="logout.php">logout</a></li>
      
                    </ul>
                </nav>
            </header>
            <br><br>
 <h2>Adoption post</h2>
<h6> Fill up this adopter info part with your true information,and cat info as per your choice and also share yor message in"message-box"so donor can understand why you want to adopt cat<h6>
  <form action="adoption-post.php" method="post">
    <fieldset>
    <legend>Adopter Information</legend>
    <label for="name">Adopter Name</label>
    <input type="text" id="adopter_name" name="adopter_name">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone">
    <label for="email">Email</label>
    <input type="text" id="email" name="email">
    <label for="address">Adress</label>
    <input type="text" id="address" name="address">
     </fieldset>
    <h4>which types of cat you prefer???share your desire requirment given below</h4>
   <fieldset>
    <legend>Cat Information</legend>
  <label for="cat_gender">Cat Gender</label>
    <select id="cat_gender" name="cat_gender">
      <option value="female cat">Female cat</option>
      <option value="male cat">Male cat</option>
    </select>
    <label for="cat_age">Cat Age</label>
    <select id="cat_age" name="cat_age">
      <option value="kitten">Kitten</option>
      <option value="young">Young</option>
      <option value="adult">Adult</option>
      <option value="senior">Senior</option>
    </select>
    <label for="breed_type">Breed Type</label>
    <select id="breed_type" name="breed_type">
      <option value="russian blue">Russian Blue</option>
      <option value="bengal">Bengal</option>
        <option value="persian">Persian</option>
      <option value="scottis fold">Scottis Fold</option>
    </select>
    <label for="potty_trained">Potty Trained</label>
    <select id="potty_trained" name="potty_trained">
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
    <label for="vaccinated">Vaccinated</label>
    <select id="vaccinated" name="vaccinated">
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
    <label for="message">Comment</label>
    <input type="text" id="message" name="message" placeholder="Why you want to donate your cat??..">
  <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
   </fieldset>
 </form>
     <footer> 
 <div class="line"></div>
    <h3>Thank you for visisting this website</h3>
           <a href="adoption-post.php" class="up">go up</a>
            </footer>
</body>
</html>



<?php

include 'db.php';

if(isset($_POST['done'])){
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $cat_name = $_POST['cat_name'];
  $cat_gender = $_POST['cat_gender'];
  $cat_age = $_POST['cat_age'];
  $breed_type = $_POST['breed_type'];
  $food_habit = $_POST['food_habit'];
  $potty_trained = $_POST['potty_trained'];
    $vaccinated = $_POST['vaccinated'];
   $comment = $_POST['comment'];
   if ($_FILES["upload_image"]["error"] > 0) 
           {
                $upload_image="No.jpg";
                
           } else 

           {
                $upload_image=time().$_FILES["upload_image"]["name"];
                move_uploaded_file($_FILES["upload_image"]["tmp_name"],"upload/".$upload_image);
           }
 echo $q = " INSERT INTO `donating-post`(`name`, `phone`, `email`, `address`, `cat_name`, `cat_gender`, `cat_age`, `breed_type`, `food_habit`, `potty_trained`, `vaccinated`, `upload_image`, `comment`) 
 VALUES('$name','$phone','$email','$address','$cat_name','$cat_gender','$cat_age','$breed_type','$food_habit','$potty_trained','$vaccinated','$upload_image','$comment')";

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
            <br><br>
            </header>


 

  <h2>Donation Form</h2>
<h6> Fill up this form with true information and give your valuable coment in"Coment-box"so that we can clear about it why you want to give your loveable cat to someone<h6>

 
  <form action="donate-cat.php" method="post" enctype="multipart/form-data">
   
    <fieldset>
    <legend>Donor Information</legend>
    <label for="name">Donor Name</label>
    <input type="text" id="name" name="name">
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone">
    <label for="email">Email</label>
    <input type="text" id="email" name="email">
    <label for="address">Adress</label>
    <input type="text" id="address" name="address">
     
    </fieldset>
  
   <fieldset>
    <legend>Cat Information</legend>
  
     <label for="cat_name">Cat Name</label>
    <input type="text" id="cat_name" name="cat_name" placeholder="if cat have any name...">
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
    <select id="breed_type" name="breed_type"  placeholder="any">
      <option value="russian blue">Russian Blue</option>
      <option value="bengal">Bengal</option>
      <option value="persian">Persian</option>
      <option value="scottis fold">Scottis Fold</option>
    </select>
     <label for="food_habit">Food Habit</label>
    <select id="food_habit" name="food_habit">
      <option value="wet food">Wet food</option>
      <option value="dry food">Dry food</option>
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
    <label> Upload_Image: </label>
    <input type="file" name="upload_image" > <br>
     <label for="comment">Comment</label>
    <input type="text" id="comment" name="comment" placeholder="Why you want to donate your cat??..">
  
<button class="btn btn-success" type="submit" name="done"> Submit </button><br>
   </fieldset>

    
  </form>

     <footer> 

           <div class="line"></div>
    
<h3>Thank you for visisting this website</h3>
           
           
        <a href="donate-cat.php" class="up">go up</a>   

        </footer>
</body>
</html>
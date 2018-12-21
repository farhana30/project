<?php

include 'db.php';

if(isset($_POST['done'])){

  $name = $_POST['name'];
  $phone =$_POST['phone'];
  $email = $_REQUEST['email'];
  $message =$_POST['message'];
$q = "INSERT INTO `contact`( `name`, `phone`, `email`, `message`) VALUES('$name','$phone','$email','$message')";
  $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
    <head>
    
        <title></title>
        
        <link rel="stylesheet" type="text/css" href="dstyle.css" />
        </head>
    
    <body>
      
      <section id="page"> 
            <header> 
              
            <hgroup>
                    <h1>Cat Adoption</h1>
                    <h3>"You can't own a cat.The best you can be partners."</h3>
                </hgroup>          
                <nav class="clear"> 
                    <ul>
                       <li> <a class="active"  href="index.php">Home </a></li>
                        <li> <a class="active" href="help.php">Help </a></li>
      <li> <a class="active" href="Contact.php">Contact</a></li>
       <li> <a class="active" href="login.php">Login</a></li>
      <li> <a class="active" href="registration.php">Registration</a></li>
                    </ul>
                </nav>
                    <br>           
       </header>
             <section id="articles"> 
             
                 <article id="article1"> 
                    <h2>Contact Us</h2>
                    
                    <div class="line"></div>
                    
                    <div class="articleBody clear">
                    
                      <figure> 
                            </figure>
                        
                        <h3>Questions? Comments? Let us know, we are always happy to hear from you</h3>
                        <p>Email:farhanaarnika@gmail.com</br>

Meow_Meow Cat adoption</br>
21/43 hazi afseruddin house</br>
Hazi Afseruddin lane</br>
jigatola,dhaka</br>

Phone: 01720164143</br></p><br><br>
      
                    </div>
                </article>
                
            </section>
            <div class="line"></div>
                
                <article id="article2">
                    <h3> Want to know anything you can message here,we will conact you as soon as possiblr through "Gmail" or "Phone Number"</h3>
                    
                    <div class="line"></div>
                    
                    <div class="articleBody clear">
                      <form action="contact.php" method="post">
      <fieldset>
   <legend>Share Any <b>Query</b></legend>
  <div class="input-group">
     <label for="name"> Name</label>
    <input type="text" id="name" name="name" placeholder="using the name you fulfill your registration...">
     <label for="phone"> Phone: </label>
    <input type="text" id="name" name="phone" placeholder="Valid phone number"> 
     <label> Email: </label>
    <input type="text" name="email" placeholder="Valid email"> <br>
     <label > Message: </label>
    <input type="text" name="message" placeholder="Share your omment and question"> <br>
 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
     
</fieldset>
</form>
                        
                    </div>
                </article>
               
            <footer> 
 <div class="line"></div>
  <h3>Thank you for visisting this website</h3>
<a href="contact.php" class="up">go up</a>
        </footer>
    </body>
</html>
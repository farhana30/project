<?php
include 'db.php';
session_start();
echo "You are logged in as: ".$_SESSION['email'];
?>
<!DOCTYPE html>
<html>
    <head>
    
        
        
        <title></title>
        
        <link rel="stylesheet" type="text/css" href="admin.css" />
        
        
    </head>
    
    <body>
      
      <section id="page"> 
            <header> 
            
                <hgroup>
                    <h1>Cat Adoption</h1>
                    <h3>"You can't own a cat.The best you can be partners."</h3>
                </hgroup>
                           <div class="logout">     
                <nav class="clear"> 
                    <ul>
      <li> <a class="activee" href="logout.php">logout</a></li>
      
      </ul> 
       </nav>
                <br><br>

            
            </header>
<div class="admin">
  <a  href="Message.php">
    <img src="msg.jpg" width="160" height="160">
     Message
  </a>
 
</div>

<div class="admin">
  <a target="_blank" href="member.php">
     <img src="mmbr.jpg" width="160" height="160">
    Member
  </a>
</div>

<div class="admin">
  <a target="_blank" href="cat-collection.php">
    <img src="cat4.jpg" width="160" height="160"><br>
   Post for Donating
  </a>
</div>

       <div class="admin">
  <a target="_blank" href="post.php">
    <img src="cat6.jpg" width="160" height="160">
   Post for adopting
  </a>
  </div>
            
        
    </body>
</html>
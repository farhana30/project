<?php
include 'db.php';
session_start();
echo "You are logged in as: ".$_SESSION['email'];
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
                    	<li> <a class="active" href="donate-cat.php">Donate Cat </a></li>
                     <li> <a class="active" href="adoption-post.php">Adopt-cat </a></li>
                     <li><a class="active" href="post.php">Want Cat</a></li>
                     <li> <a class="active" href="cat-collection.php">Cat-Collection</a></li>
                    <li> <a class="activee" href="logout.php">logout</a></li>
                    
      
                    </ul>
                </nav>
                <br>
            
            </header>

            
            <section id="articles"> 

                
                <article id="article1"> 
                    <h2>About Cat adoption</h2>
                    
                    <div class="line"></div>
                    
                    <div class="articleBody clear">
                    
                      <figure> 
                        
                        </figure>
                        
                        <p>Cat adoption a website for cat admirer . This website about an adoption of a cat. In Bangladesh there are  many cat admirer but there was no specific website about adoption of cat .Now Cat adoption helps those pepole who wants to adopt cat inside Dhaka.</p>
                        <p>If You fell this website can help you and you want to adopt/donate cat then must you have to do your registration first then you  can login and donate/adopt cat from this website<br><br>
      If you don't understand how to donate/adopt then go to "Help" option and see the procedure. </p>
                    </div>
                </article>
                
            </section>

        <footer> 

           <div class="line"></div>
           From the comfort of their personal computers, cat lovers can search for a cat that best matches their needs and also they can donate their cat so that cat don't be homeless.
<h3>Thank you for visisting this website</h3>
           
           
           <a href="index.php" class="up">Home</a>

        </footer>
            
    </section> 
    </body>
    
</html>
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
                        <li> <a class="active" href="help.php">Help</a></li>
                      <li> <a class="active" href="member.php">Member </a></li>
                      <li><a class="active" href="post.php">Want Cat</a></li>
    <li> <a class="active" href="cat-collection.php">Cat-Collection</a></li>
      <li> <a class="activee" href="logout.php">logout</a></li>
                    </ul>
                </nav>
                
            
            </header>

  
  <h1> Message </h1>
  
  <?php

    include 'db.php'; 
   $q = "select * from contact ";

    $query = mysqli_query($con,$q);

    while($res = mysqli_fetch_array($query)){
 ?>
   
     <br>
     <div>
     Name:<?php echo $res['name'];  ?> <br>
     Phone:<?php echo $res['phone'];  ?> <br>
     Email:<?php echo $res['email'];  ?> <br>
     <div class="msg">
     <?php echo $res['message'];  ?> <br>
    </div>
    <button class="btn-danger btn"> <a href="msg dlt.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button>
</div>
   <?php 
   }
   ?>
   
  </table>  

  </div>
 </div>

  <script type="text/javascript">
  
  $(document).ready(function(){
   $('#tabledata').DataTable();
  }) 
  
 </script>

</body>
</html>
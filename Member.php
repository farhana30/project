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
                      <li> <a class="active" href="Message.php">Message</a></li>
                      <li><a class="active" href="post.php">Want Cat</a></li>
    <li> <a class="active" href="cat-collection.php">Cat-Collection</a></li>
      <li> <a class="activee" href="logout.php">logout</a></li>
      
                    </ul>
                </nav>
                <br><br>
            
            </header>
            <h2> Member</h2>
            

  <table>
   
   <tr>
    
    <th> user_id </th>
    <th> Firstname </th>
    <th> Lastname </th>
    <th> Phone </th>
    <th> Address </th>
    <th> Email </th>
    <th> Delete </th>
  

    </tr>
  

  <?php

    include 'db.php'; 
   $q = "select * from registration ";

    $query = mysqli_query($con,$q);

    while($res = mysqli_fetch_array($query)){
 ?>
   <tr>
    <td> <?php echo $res['user_id'];  ?> </td>
    <td> <?php echo $res['firstname'];  ?> </td>
    <td> <?php echo $res['lastname'];  ?> </td>
    <td> <?php echo $res['phone'];  ?> </td>
    <td> <?php echo $res['address'];  ?> </td>
    <td> <?php echo $res['email'];  ?> </td>
    <td> <button class="btn-danger btn"> <a href="member-delete.php?user_id=<?php echo $res['user_id']; ?>" class="text-white"> Delete </a>  </button> </td>
   

    </tr>

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
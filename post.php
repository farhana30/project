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
                </hgroup><br>
                                
                <nav class="clear"> 
                    <ul>
                      < <li> <a class="active"  href="user.php">Home </a></li>
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
             <div class="search">

    <form action="post.php" method="post">
    
      <h4>Search your match</h4>
      <input type="text" placeholder="Search age.." name="cat_age">
       <input type="text" placeholder="Search breed type.." name="breed_type">
        <input type="text" placeholder="Search gender.." name="cat_gender">
        <input type="text" placeholder="Search address.." name="address">
       <button class="btn btn-success" type="submit" name="search"> Search </button>
       </fieldset>
    </form>
  </div>
            </header>

  <h2> Post for Adopting </h2>
  <br>
  
  <?php

    if(isset($_POST["search"])){
  $cat_age = $_POST['cat_age'];
    $breed_type = $_POST['breed_type'];
    $cat_gender = $_POST['cat_gender'];
     $address = $_POST['address'];
     $q= "SELECT * FROM `adopting-post`
       WHERE `cat_age`='$cat_age'  OR `breed_type`='$breed_type' OR `cat_gender`='$cat_gender' OR `address`='$address'
       ORDER BY `ap_id` DESC";
        $result = filterTable($q);
}
 else {
   $q = "SELECT * FROM `adopting-post`";
$result = filterTable($q);
}

function filterTable($q){
include 'db.php'; 

$filter_result = $con->query($q);
        return $filter_result;
}

    while($res = mysqli_fetch_array($result)){
 ?>
 <div>
  <h4>Owner info</h4>
  <div class="info">
  Adopter Name:<?php echo $res['adopter_name'];  ?> <br><br>
  Phone:<?php echo $res['phone'];  ?> <br><br>
 Email :<?php echo $res['email'];  ?> <br><br>
 Address :<?php echo $res['address'];  ?> 
</div>
     <div class="box">
      <h4>Cat info</h4>
     Cat gender:<?php echo $res['cat_gender']; ?> <br><br>
     cat age:<?php echo $res['cat_age'];  ?>  <br><br>
   Breed type:<?php echo $res['breed_type'];  ?> <br><br>
     Potty trained: <?php echo $res['potty_trained'];  ?> <br><br>
     Vaccinated:<?php echo $res['vacinated'];  ?> <br><br>
    Message:<?php echo $res['message'];  ?> <br><br>
 </div>
 </div>
<?php 
   }
   ?>
   <footer>
    <a href="post.php" class="up">Go UP</a>

        </footer>
            
    </section> 

  <script type="text/javascript">
  
  $(document).ready(function(){
   $('#tabledata').DataTable();
  }) 
  
 </script>

</body>
</html>
<!DOCTYPE html>
<html>
<title>DEBPS Admin</title>
<link rel="stylesheet" href="home3.css">
<?php
  session_start();
?>
<body>
<?php
    include 'header.php';
  ?>
  
  <?php
    include 'navbar_emp.php';
  ?>
    
  <div class="grid-container">
        
  <div class="left" style="background-color:#aaa;"><p><img src="side1.jpg" alt="Forest" width="350" height="1000"></div>
    <div class="middle" style="background-color:#bbb;">
    <p><a href="create_bill.php"><img src="createbill.jpg" alt="bill" width="400" height="250">
    </a></p>

    <p><a href="FAQ.php"><img src="FAQ.png" alt="Forest" width="400" height="250">
    </a></p>

    <p><a href="TARRIF.php"><img src="Tarrif.jpg" alt="TARRIF" width="400" height="250">
    </a></p>

    <p><a href="user_details_emp.php"><img src="Bill Details.jpg" alt="Bill Details" width="400" height="250">
    </a></p></div>  
    <div class="right" style="background-color:#ccc;"><p><img src="side1.jpg" alt="Forest" width="350" height="1000">
    </p></div>
    
    <div class="footer">
      <p>Footer</p>
    </div>
  </div>
  

<br>


</body>
</html>
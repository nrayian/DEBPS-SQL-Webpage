<!DOCTYPE html>
<html>
<title>DEBPS TARRIF</title>
<link rel="stylesheet" href="home3.css">
<?php
  session_start();
?>
<body>

<?php
    include 'header.php';
  ?>
  <?php
    $option=$_SESSION['choice'];
    if($option=='Admin'){
      include 'navbar_emp.php';
    }
    else{
      include 'navbar_user.php';
    }
    
  ?>
    
  <div class="grid-container">
        
    <div class="left" style="background-color:#aaa;"><p><img src="side1.jpg" alt="Forest" width="350" height="1000"></div>
    <div class="middle" style="background-color:#bbb;">
        <h3>Frequently Asked Questions</h3>
        <br>
        <br>
        <p><h4>
            How to Pay?<br>
            There are 3 methods of completing the payment:<br>
            <br>
            Cash<br>
            Bkash<br>
            Credit Card<br>
            <br>
            The due amount have to be inserted in bill or else the transaction will not take place.<br>
        </h4>
        </p>
    </div>  
    <div class="right" style="background-color:#ccc;"><p><img src="side1.jpg" alt="Forest" width="350" height="1000">
    </p></div>
    
    <div class="footer">
      <p>Footer</p>
    </div>
  </div>
  

<br>


</body>
</html>
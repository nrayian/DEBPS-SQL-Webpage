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
        <h3>Tarrif Information</h3>
        <br>
        <br>
        <p><h4>
        Electricity Bill Per Unit Bangladesh
Bill has to be paid Tk 5.72 per unit for consumers of 76-200 units, Tk 6 per unit for 201-300 units, Tk 6.34 per unit for 301-400 units, Tk 9.94 per unit for 401-600 units, and Tk 11.46 per unit for consumers of over 600 units.
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
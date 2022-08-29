<!DOCTYPE html>
<html>
<title>DEBPS Bill Details</title>
<link rel="stylesheet" href="home3.css">
<?php
  session_start();
?>
<body>

<?php
    include 'header.php';
  ?>
  <?php
    include 'navbar_user.php';
  ?>
    
  <div class="grid-container">
        
    <div class="left" style="background-color:#aaa;"><p><img src="side1.jpg" alt="Forest" width="350" height="1000"></div>
    <div class="middle" style="background-color:#bbb;"><p>
        <h3>Bill Details</h3><br>
        <h4>Unit Used</h4>
          <?php
          require_once('connectsql.php');

          $email=$_SESSION['emailid'];
          $password=$_SESSION['passwordid'];
          //$option=$_SESSION['choice'];
          //echo $email;
    
          $sql = "SELECT unit, amount, status FROM bill WHERE ID=(SELECT ID FROM `customer` WHERE `email_id`='".$email."' AND password='".$password."');";
          $result=$conn->query($sql);
          $name=$result->fetch_assoc();
          echo $name['unit']," unit";
          ?>
        <br>
        <h4>Bill Amount</h4>
        <?php
          require_once('connectsql.php');

          $email=$_SESSION['emailid'];
          $password=$_SESSION['passwordid'];
          //$option=$_SESSION['choice'];
          //echo $email;
    
          $sql = "SELECT unit, amount, status, late_fee FROM bill WHERE ID=(SELECT ID FROM `customer` WHERE `email_id`='".$email."' AND password='".$password."');";
          $result=$conn->query($sql);
          $name=$result->fetch_assoc();
          echo $name['amount']," tk";
          ?>
        <br>
        <h4>Payment Status</h4>
        <?php
          require_once('connectsql.php');

          $email=$_SESSION['emailid'];
          $password=$_SESSION['passwordid'];
          //$option=$_SESSION['choice'];
          //echo $email;
    
          $sql = "SELECT unit, amount, status, late_fee FROM bill WHERE ID=(SELECT ID FROM `customer` WHERE `email_id`='$email' AND password='$password');";
          $result=$conn->query($sql);
          $name=$result->fetch_assoc();
            $status=$name['status'];
            if($status=='not'){
                $pay="Not paid";
            }
            else{
                $pay="Paid";
            }
          echo $pay;
          ?>
        <br>
        <h4>Late Fee</h4>
        <?php
          require_once('connectsql.php');

          $email=$_SESSION['emailid'];
          $password=$_SESSION['passwordid'];
          //$option=$_SESSION['choice'];
          //echo $email;
    
          $sql = "SELECT unit, amount, status, late_fee FROM bill WHERE ID=(SELECT ID FROM `customer` WHERE `email_id`='".$email."' AND password='".$password."');";
          $result=$conn->query($sql);
          $name=$result->fetch_assoc();
          echo $name['late_fee']," tk";
          ?>
        <br>
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
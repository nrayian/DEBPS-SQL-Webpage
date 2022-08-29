<!DOCTYPE html>
<html>
<title>DEBPS My Account</title>
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
    <div class="middle" style="background-color:#bbb;"><p>
        <h3>Account Details</h3><br>
        <h4>Full Name</h4>
          <?php
          require_once('connectsql.php');

          $email=$_SESSION['emailid'];
          $password=$_SESSION['passwordid'];
          //$option=$_SESSION["choice"];
          //echo $email;
    
          $sql="SELECT `first_name`, `last_name` FROM `employee` WHERE email_id='".$email."' AND password='".$password."'";
          $result=$conn->query($sql);
          $name=$result->fetch_assoc();
          echo $name['first_name']," ",$name['last_name'];
          ?>
        <br>
        <h4>Email ID</h4>
        <?php
          require_once('connectsql.php');

          $email=$_SESSION['emailid'];
          $password=$_SESSION['passwordid'];
          //$option=$_SESSION['choice'];
          //echo $email;
    
          $sql="SELECT `email_id` FROM `employee` WHERE email_id='".$email."' AND password='".$password."'";
          $result=$conn->query($sql);
          $name=$result->fetch_assoc();
          echo $name['email_id'];
          ?>
        <br>
        <h4>Phone Number</h4>
        <?php
          require_once('connectsql.php');

          $email=$_SESSION['emailid'];
          $password=$_SESSION['passwordid'];
          //$option=$_SESSION['choice'];
          //echo $email;
    
          $sql="SELECT `phone_number` FROM `employee` WHERE email_id='".$email."' AND password='".$password."'";
          $result=$conn->query($sql);
          $name=$result->fetch_assoc();
          echo $name['phone_number'];
          ?>
        <br>
        <h4>Address</h4>
        <?php
          require_once('connectsql.php');

          $email=$_SESSION['emailid'];
          $password=$_SESSION['passwordid'];
          //$option=$_SESSION['choice'];
          //echo $email;
    
          $sql="SELECT `address` FROM `employee` WHERE email_id='".$email."' AND password='".$password."'";
          $result=$conn->query($sql);
          $name=$result->fetch_assoc();
          echo $name['address'];
          ?>
        <br>
        <h4>Nationality</h4>
        <?php
          require_once('connectsql.php');

          $email=$_SESSION['emailid'];
          $password=$_SESSION['passwordid'];
          //$option=$_SESSION['choice'];
          //echo $email;
    
          $sql="SELECT `nationality` FROM `employee` WHERE email_id='".$email."' AND password='".$password."'";
          $result=$conn->query($sql);
          $name=$result->fetch_assoc();
          echo $name['nationality'];
          ?>
        <br>
        <br>
        <form action="edit.php" method="post">
          <input type='submit' value='Edit' name='Edit'>
          
        </form>
        <?php
          if(isset($_POST['Edit'])){
            $email=$_SESSION['emailid'];
            $passwordid=$password;
          }
        ?>
        <a href="password_change.php">Change Password</a>
    
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
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
    <div class="middle" style="background-color:#bbb;"><p>
<?php
  $email=$_SESSION['emailid'];
  $pass=$_SESSION['passwordid'];
  $option=$_SESSION['choice'];
  
    if(isset($_POST['submit'])){
        require_once('connectsql.php');

        $lname=$_POST['lname'];
        $fname=$_POST['fname'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        //echo $email;
        //echo $option;
        if($option=='Admin'){
          $select='employee';
        }
        else{
          $select='customer';
        }

        $sql="UPDATE `$select` SET `first_name`='$fname',`last_name`='$lname',`phone_number`='$phone',`address`='$address' WHERE `email_id`='$email' AND password='$pass'";

        $conn->query($sql);
        $sql5="SELECT * FROM `$select` WHERE `email_id`='$email' AND password='$pass'";

        $result=mysqli_query($conn, $sql5);

        if(mysqli_num_rows($result)==1){
            echo"<script>
            alert('Update complete');</script>";
            if($option=='Admin'){
              echo"<script>window.location.href='my_account_emp.php';</script>";
            }
            else{
              echo"<script>window.location.href='my_account_user.php';</script>";
            }
            
        }
        else{
            echo"<script>
            alert('Not Edited');</script>";
        }
      }
?>
<?php ?>

<h3>Edit Details</h3>
<br>

<form method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="phone">Phone Number:</label><br>
  <input type="text" id="phone" name="phone" value=""><br><br>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" value=""><br>
  <input type="submit" name="submit" value="Submit">
</form>

</table></div>  
    <div class="right" style="background-color:#ccc;"><p><img src="side1.jpg" alt="Forest" width="350" height="1000">
    </p></div>
    
    <div class="footer">
      <p>Footer</p>
    </div>
  </div>
  

<br>


</body>
</html>
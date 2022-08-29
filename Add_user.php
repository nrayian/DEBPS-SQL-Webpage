<!DOCTYPE html>
<html>
<title>DEBPS Registration</title>
<link rel="stylesheet" href="home3.css">

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
<?php
    if(isset($_POST['submit'])){
        require_once('connectsql.php');

        $id=$_POST['id'];
        $lname=$_POST['lname'];
        $fname=$_POST['fname'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $nationality=$_POST['nationality'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $password='admin';

        $sql='INSERT INTO `customer`(`ID`, `first_name`, `last_name`, `email_id`, `phone_number`, `address`, `nationality`, `gender`, `password`) 
        VALUES ("'.$id.'","'. $fname .'","'. $lname .'","'.$email.'","'.$phone.'","'.$address.'","'.$nationality.'","'.$gender.'","admin");';

        $conn->query($sql);
        $sql1="SELECT * FROM `customer` WHERE email_id='$email' AND password='$password'";

        $result=mysqli_query($conn, $sql1);

        if(mysqli_num_rows($result)==1){
            echo"<script>
            alert('Registration complete');
            window.location.href='index.php';</script>";
        }
        else{
            echo"<script>
            alert('Invalid registration');</script>";
        }
    }
?>

<h3>User Registration Form</h3>
<a href="index.php">Back</a>
<br>

<form action="Add_user.php" method="POST">
  <label for="id">Customer ID:</label><br>
  <input type="text" id="id" name="id" value=""><br>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="email">Email ID:</label><br>
  <input type="text" id="email" name="email" value=""><br>
  <label for="phone">Phone Number:</label><br>
  <input type="text" id="phone" name="phone" value=""><br><br>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" value=""><br>
  <label for="nationality">Nationality:</label><br>
  <input type="text" id="nationality" name="nationality" value=""><br><br>
  <label for="gender">Gender:</label><br>
  <input type="text" id="gender" name="gender" value=""><br><br>
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
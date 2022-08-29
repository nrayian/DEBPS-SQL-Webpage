<!DOCTYPE html>
<html>
<body>
    
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

        $sql='INSERT INTO `customer`(`ID`, `first_name`, `last_name`, `email_id`, `phone_number`, `address`, `nationality`, `gender`) 
        VALUES ("'.$id.'","'. $fname .'","'. $lname .'","'.$email.'","'.$phone.'","'.$address.'","'.$nationality.'","'.$gender.'");';

        $conn->query($sql);
    }
?>

<h1>Add Clients</h1>
<a href="index.php">Back</a>
<br>

<form action="add_clients.php" method="POST">
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

</table>
</body>
</html>
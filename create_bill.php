<!DOCTYPE html>
<html>
<title>DEBPS Billing</title>
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
        $unit=$_POST['unit'];
        if($unit<200){
            $cost=(5.72)*$unit;
            $late=(0.15)*$cost;
        }
        else if($unit>=201 && $unit<300){
            $cost=(6)*$unit;
            $late=(0.15)*$cost;
        }
        else if($unit>=300 && $unit<400){
            $cost=(6.34)*$unit;
            $late=(0.15)*$cost;
        }
        else{
            $cost=(11.46)*$unit;
            $late=(0.15)*$cost;
        }

        $sql = "INSERT INTO `bill`(`ID`, `amount`, `late_fee`, `unit`, `lat_fee_date`, `status`, `first_name`, `last_name`) VALUES ('$id','$cost','$late','$unit','','not','$fname','$lname');";

        $conn->query($sql);
        $sql1="SELECT * FROM `customer` WHERE first_name='$fname' AND last_name='$lname' AND ID='$id'";

        $result=mysqli_query($conn, $sql1);

        if(mysqli_num_rows($result)==1){
            echo"<script>
            alert('Billing complete');
            </script>";
        }
        else{
            echo"<script>
            alert('Invalid Billing');</script>";
        }
    }
?>

<h3>User Billing Form</h3>
<br>

<form method="POST">
  <label for="id">Customer ID:</label><br>
  <input type="text" id="id" name="id" value=""><br>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <label for="unit">Unit:</label><br>
  <input type="text" id="unit" name="unit" value=""><br><br>
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
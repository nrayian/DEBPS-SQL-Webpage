<!DOCTYPE html>
<html>
<title>DEBPS Remove</title>
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
        <h3>Delete Account</h3>
          <br>
          <br>
        <form method="POST">
            <label for="Option">Select Option 1</label>
            <select id="Option1" name="Option1">
            <option value="user">User</option>
            <option value="bill">Bill</option>
            </select>
            <label for="emailid">Email ID</label>
            <input type="text" id="emailid" name="emailid" placeholder="Email id..">            
  
            <input type="submit" name="submit" value="Submit">
        </form>
          
        </table>
    </div>  
    <div class="right" style="background-color:#ccc;"><p><img src="side1.jpg" alt="Forest" width="350" height="1000">
    </p></div>
    <?php
    if(isset($_POST['submit'])){
        require_once('connectsql.php');
        $emailid=$_POST['emailid'];
        $option1=$_POST['Option1'];

        

        if($option1=='user'){
            $sql = "DELETE FROM `customer` WHERE email_id='$emailid';";
            $result1=$conn->query($sql);
            $sql3= "SELECT ID FROM customer WHERE email_id='$emailid'";
            $result=$conn->query($sql3);
            if(mysqli_num_rows($result)!=1){
                echo"<script>
                alert('User Deletion Complete!');
                window.location.href='user_details_emp.php';</script>";
            }
            else{
                echo"<script>
                alert('User Deletion Unsuccessful!');
                window.location.href='search.php';</script>";
            }
        }
        else{
            $sql1 = "SELECT bill.ID FROM `customer` JOIN `bill` ON customer.ID=bill.ID WHERE customer.email_id='$emailid';";
            $result1=$conn->query($sql1);
            $row=$result->fetch_assoc();
            $id=$row['ID'];
            $sql2 = "DELETE FROM `bill` WHERE ID='$id';";
            $result2=$conn->query($sql2);
            $sql3= "SELECT* FROM bill WHERE ID='$id'";
            $result=$conn->query($sql3);
            if(mysqli_num_rows($result)!=1){
                echo"<script>
                alert('Bill Deletion Complete!');
                window.location.href='user_details_emp.php';</script>";
            }
            else{
                echo"<script>
                alert('Bill Deletion Unsuccessful!');
                window.location.href='search.php';</script>";
            }
        }
     }
    ?>
    
    <div class="footer">
      <p>Footer</p>
    </div>
  </div>
  

<br>

</body>
</html>
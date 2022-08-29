<!DOCTYPE html>
<html>
<title>DEBPS Payment</title>
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
    <div class="middle" style="background-color:#bbb;">
        <h3>Select Payment Method</h3>
        <h4>Bill Amount Due</h4>
            <?php
            require_once('connectsql.php');

            $email=$_SESSION['emailid'];
            $password=$_SESSION['passwordid'];
          //$option=$_SESSION['choice'];
          //echo $email;
    
          $sql4= "SELECT amount FROM `bill` WHERE ID=(SELECT ID FROM customer WHERE email_id='$email' AND password='$password');";
            $result=$conn->query($sql4);
            $name=$result->fetch_assoc();
            $amount=$name['amount'];
            echo $name['amount']," tk";
          ?>
          <br>
          <br>
        <form method="POST">
            <label for="Option">Select Option</label>
            <select id="Option" name="Option">
                <option value="Cash">Cash</option>
                <option value="Bkash">Bkash</option>
                <option value="Credit Card">Credit Card</option>
            </select>
            <label for="bill">Bill</label>
            <input type="text" id="bill" name="bill" placeholder="tk..">

            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="01XXX..">
            
  
            <input type="submit" name="submit" value="Submit">
        </form>
          
        </table>
    </div>  
    <div class="right" style="background-color:#ccc;"><p><img src="side1.jpg" alt="Forest" width="350" height="1000">
    </p></div>
    <?php
    if(isset($_POST['submit'])){
        require_once('connectsql.php');
        $email=$_SESSION['emailid'];
        $password=$_SESSION['passwordid'];

        $sql1 = "SELECT ID FROM customer WHERE email_id='$email' AND password='$password'";
        $result=$conn->query($sql1);
        $row=$result->fetch_assoc();
        $ID=$row['ID'];
        
        $bill=$_POST['bill'];
        if($bill==$amount){
            $sql2 = "UPDATE `bill` SET `status`='yes' WHERE ID='$ID'";
            $result=$conn->query($sql2);
        }
        else{
            $sql2 = "UPDATE `bill` SET `status`='not' WHERE ID='$ID'";
            $result=$conn->query($sql2);
        }
        $sql3= "SELECT status FROM `bill` WHERE ID=(SELECT ID FROM customer WHERE email_id='$email' AND password='$password');";
        $result=$conn->query($sql3);
        $row=$result->fetch_assoc();
        $status=$row['status'];
        if($status=="yes"){
            echo"<script>
            alert('Payement Complete!');
            window.location.href='user_login.php';</script>";
        }
        else{
          echo"<script>
            alert('Payement Not Complete!');
            window.location.href='payment.php';</script>";
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
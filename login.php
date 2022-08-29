<!DOCTYPE html>
<html>
<title>DEBPS login</title>
<link rel="stylesheet" href="home3.css">

<body>

  <div class="grid-container">
    <div class="header">
      <div class="div1"><a href="login.php">LOGIN</a></div>
      <h1>DEBPS</h1>
      <h2>Digital Eelectrical Billing and Payment System</h2>
    </div>
  </div>
  <?php
    include 'navbar_home.php';
  ?>
    
  <div class="grid-container">
        
    <div class="left" style="background-color:#aaa;"><p><img src="side1.jpg" alt="Forest" width="350" height="1000"></div>
    <div class="middle" style="background-color:#bbb;">
        <h3>LOGIN</h3>
        <form method="POST">
            <label for="email">Email ID</label>
            <input type="text" id="email" name="email" placeholder="Email id..">

            <label for="password">Password</label>
            <input type="text" id="password" name="password" placeholder="Your Password..">

            <label for="Option">Select Account</label>
            <select id="Option" name="Option">
                <option value="Residential">Residential</option>
                <option value="Commercial">Commercial</option>
                <option value="Admin">Admin</option>
            </select>
  
            <input type="submit" name="submit" value="Submit">
        </form>
          
        </table>
    </div>  
    <div class="right" style="background-color:#ccc;"><p><img src="side1.jpg" alt="Forest" width="350" height="1000">
    </p></div>
    <?php
    if(isset($_POST['submit'])){
        require_once('connectsql.php');

        $password=$_POST['password'];
        $email=$_POST['email'];
        $option=$_POST['Option'];

        if($option=='Admin'){
          $select='employee';
        }
        else{
          $select='customer';
        }

        $sql3="SELECT * FROM `$select` WHERE email_id='$email' AND password='$password'";

        $result=mysqli_query($conn, $sql3);
        if(mysqli_num_rows($result)==1){
          session_start();
          $_SESSION['emailid']=$_POST['email'];
          $_SESSION['passwordid']=$_POST['password'];
          $_SESSION['choice']=$_POST['Option'];
          if($option=='Admin'){
            header("location: emp_login.php");
          }
          else{
            header("location: user_login.php");
          }
        }
        else{
          echo"<script>
            alert('Incorrect email or password');
            window.location.href='index.php';</script>";
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
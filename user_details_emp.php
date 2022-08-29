<!DOCTYPE html>
<html>
<title>DEBPS Customer Bill</title>
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
        <h3>Customer Bill Details</h3><br>
        <h4><table>
  <tr>
    <th>Name</th>
    <th>Unit</th>
    <th>Charge</th>
    <th>Status</th>
  </tr>
    <?php
        require_once('connectsql.php');
        //$pay="Paid";

        $sql = "SELECT CONCAT(customer.first_name,' ', customer.last_name) AS 'Name', bill.unit,bill.amount,bill.status AS 'Payment Status' FROM customer JOIN bill ON customer.ID=bill.ID;";
        $result = $conn->query($sql);
        while($row= $result->fetch_assoc()){
            $status=$row['Payment Status'];
            if($status=="not"){
                $pay="Not paid";
            }
            else{
                $pay="Paid";
            }
              echo "<tr>
                  <td>". $row['Name'] ."</td>
                  
                  <td>". $row['unit'] ."</td>
                  <td>". $row['amount'] ." tk</td>
                  <td>". $pay."</td>
                  </tr>";
          }
          ?>
          </table></h4>
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
<!DOCTYPE html>
<html>
<body>

<h1>View Clients</h1>
<a href="index.php">Back</a>


<table>
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Pone Number</th>
    <th>Email ID</th>
    <th>Nationality</th>
    <th>Gender</th>
  </tr>

<?php
$name='Syed Niamul';
$name1=explode($name,1);
echo "(explode(',',$name,0))";
    require_once('connectsql.php');
    $sql = "SELECT `ID`, `first_name`, `last_name`, `email_id`, `phone_number`, `address`, `nationality`, `gender` FROM `customer`";
    $result = $conn->query($sql);
    while($row= $result->fetch_assoc()){
        echo "<tr>
            <td>". $row['ID'] ."</td>
            <td>". $row['first_name'] ."</td>
            <td>". $row['last_name'] ."</td>
            <td>". $row['address'] ."</td>
            <td>". $row['phone_number'] ."</td>
            <td>". $row['email_id'] ."</td>
            <td>". $row['nationality'] ."</td>
            <td>". $row['gender'] ."</td>
        </tr>";
    }
?>


</table>
</body>
</html>
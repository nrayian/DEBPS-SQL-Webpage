<?php
session_start();
unset($_SESSION['emailid']);
header("location:index.php");
?>
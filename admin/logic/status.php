<?php

include("./db.php");
$sid=$_GET['sid'];
$status=$_GET['status'];

$insert="UPDATE product_data SET status='$status' WHERE pid='$sid'";

mysqli_query($conect,$insert);

header('location:../dashboard.php')
?>
<?php 
session_start();
include("./db.php");
if(!isset($_SESSION['userName'])){
    header("location:../signin.php");
}

$editId=$_GET['pid'];
echo $editId;

// $select="SELECT *FROM product_data WHERE sid='$editId'";
// $result=$connect->query($select);
// $row=$result->fetch_assoc();
?>
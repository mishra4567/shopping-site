<?php 
session_start();
if(!isset($_SESSION['userName'])){
    header("location:../signin.php");
}

$connect=mysqli_connect("localhost","root","","task-1");
$editId=$_GET['pid'];
echo $editId;

// $select="SELECT *FROM product_data WHERE sid='$editId'";
// $result=$connect->query($select);
// $row=$result->fetch_assoc();
?>
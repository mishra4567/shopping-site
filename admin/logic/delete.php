<?php
include("./db.php");
$studentId = $_GET['did'];
// echo $studentId;
//select image from folder 

$select = "SELECT * FROM student_data WHERE sid='$studentId'";
$resultSet = $connect->query($select);
$row = $resultSet->fetch_assoc();
// delet from image folder
unlink("../student_img/".$row['image']);


$delete = "DELETE FROM student_data WHERE sid='" . $studentId . "'";
if ($connect->query($delete)) {
    header("location:../dashboard.php");
};

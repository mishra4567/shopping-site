<?php
$conect = mysqli_connect("localhost", "root", "", "task-1");

$studentId = $_GET['did'];
// echo $studentId;
//select image from folder 

$select = "SELECT * FROM student_data WHERE sid='$studentId'";
$resultSet = $conect->query($select);
$row = $resultSet->fetch_assoc();
// delet from image folder
unlink("../student_img/".$row['image']);


$delete = "DELETE FROM student_data WHERE sid='" . $studentId . "'";
if ($conect->query($delete)) {
    header("location:../dashboard.php");
};

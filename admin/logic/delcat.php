<?php
$conect = mysqli_connect("localhost", "root", "", "task-1");
$catId=$_GET['catId'];
$delete="DELETE FROM categories WHERE cid='$catId'";
$conect->query($delete);
header("location:../dashboard.php");
?>

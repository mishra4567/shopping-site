<?php
include("./db.php");
$catId=$_GET['catId'];
$delete="DELETE FROM categories WHERE cid='$catId'";
$connect->query($delete);
header("location:../dashboard.php");
?>

<?php
include("./db.php");
$catId=$_GET['catId'];
$delete="DELETE FROM categories WHERE cid='$catId'";
$conect->query($delete);
header("location:../dashboard.php");
?>

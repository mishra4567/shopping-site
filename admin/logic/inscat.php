<?php
include("./db.php");
if (isset($_POST['save'])) {
    $category = $connect->real_escape_string($_POST['cName']);
    $perent=$_POST['parent_id'];
    $insert = "INSERT INTO categories SET cat_name='$category',pid='$perent'";
    $connect->query($insert);
    header("location:../dashboard.php");
} else {
    echo "access denied";
}

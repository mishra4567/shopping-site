<?php
$connect = mysqli_connect("localhost", "root", "", "task-1");

if (isset($_POST['save'])) {
    $category = $connect->real_escape_string($_POST['cName']);
    $insert = "INSERT INTO categories SET cat_name='$category'";
    $connect->query($insert);
    header("location:../dashboard.php");
} else {
    echo "access denied";
}
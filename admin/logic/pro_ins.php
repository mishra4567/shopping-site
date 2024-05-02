<?php
include("./db.php");
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $quntity = $_POST['quntity'];
    $price = $_POST['price'];
    $tex=$_POST['tex'];
    $status=$_POST['status'];
    // image input
    $buffer = $_FILES['pro_image']['tmp_name'];
    $fileName = time() . $_FILES['pro_image']['name'];
    move_uploaded_file($buffer, "../../pro_img/" . $fileName);
    //database conection
    $insert = "INSERT INTO product_data SET name='$name',quntity='$quntity',price='$price',tex='$tex',image='$fileName',status='$status'";
    if ($connect->query($insert)) {
        header("location:../dashboard.php");
    };
} else {
    echo "403 forbidden";
}
?>
<?php
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
    $conect = mysqli_connect("localhost", "root", "", "task-1");
    $insert = "INSERT INTO product_data SET name='$name',quntity='$quntity',price='$price',tex='$tex',image='$fileName',status='$status'";
    if ($conect->query($insert)) {
        header("location:../dashboard.php");
    };
} else {
    echo "403 forbidden";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>
    
</body>
</html>
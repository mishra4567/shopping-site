<?php 
include("./db.php");
if(isset($_POST['regi'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=MD5($_POST['pass']);
    echo $insert="INSERT INTO admin SET name='$name', email='$email',password='$password'";
    if($connect->query($insert)){
        header("location:../signin.php");
    };
}
?>
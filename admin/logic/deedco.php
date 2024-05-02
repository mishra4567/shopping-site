<?php
session_start();
include("./db.php");

if(isset($_POST['delete'])){
    $all_id=$_POST['deleteID'];
    $separet_all_id=implode(",",$all_id);
    $query="DELETE FROM product_data WHERE pid IN($separet_all_id)";
    $query_run=mysqli_query($connect, $query);
    if($query_run){
        $_SESSION['status']= "Deleted success are";
        header("location:../pro_view.php");
    }else{
        $_SESSION['status']= "Something Went Wrong";
        header("location:../pro_view.php");
    }
}

?>
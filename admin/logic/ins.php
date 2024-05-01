<?php
include("./db.php");
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $stream = $_POST['stream'];
    //checkbox submit subject
    if (isset($_POST['subject'])) {
        $subject = implode(",", $_POST['subject']);
    } else {
        $subject = "";
    }
    // image input
    $buffer = $_FILES['s_image']['tmp_name'];
    $fileName = time() . $_FILES['s_image']['name'];
    move_uploaded_file($buffer, "../../user_img/" . $fileName);
    //database conection
    $insert = "INSERT INTO student_data SET name='$name',gender='$gender',stream='$stream',subject='$subject',image='$fileName'";
    if ($conect->query($insert)) {
        header("location:../dashboard.php");
    };
} else {
    echo "403 forbidden";
}
?>

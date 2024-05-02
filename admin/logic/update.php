<?php
// updated post

include("./db.php");
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $stream = $_POST['stream'];
    //edite page id
    $updateId = $_POST['eid'];
    //edite page photo
    if (isset($_FILES['s_image']['name']) && $_FILES['s_image']['name'] != "") {
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
        //database connection
        $update = "UPDATE student_data SET name='$name',gender='$gender',stream='$stream',subject='$subject',image='$fileName' WHERE sid='$updateId'";
    }else{
        $update = "UPDATE student_data SET name='$name',gender='$gender',stream='$stream',subject='$subject' WHERE sid='$updateId'";
    }
    if ($connect->query($update)) {
        header("location:../dashboard.php");
    };
} else {
    echo "403 forbidden";
}

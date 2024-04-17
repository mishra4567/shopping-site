<?php 
session_start();
if(!isset($_SESSION['userName'])){
    header("location:signin.php");
}

$connect=mysqli_connect("localhost","root","","task-1");
$editId=$_GET['eid'];
echo $editId;

$select="SELECT *FROM student_data WHERE sid='$editId'";
$result=$connect->query($select);
$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <?php 
            include("./sidebar.php")
            ?>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php   
                include("./navber.php")
            ?>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <!-- <div class="col-md-6 text-center">
                        <h3>This is blank page</h3>
                    </div> -->
                    <form action="./logic/ins.php" method="post" enctype="multipart/form-data">
                        <p>Name</p>
                        <p><input type="text" name="name" value="<?php echo $row['name'] ?>"></p>
                        <p>Gender</p>
                        <p><input <?php if($row ['gender']=="Male"){echo "checked";} ?> type="radio" name="gender" value="Male">Male</p>
                        <p><input <?php if($row ['gender']=="Female"){echo "checked";} ?> type="radio" name="gender" value="Female">Female</p>
                        <p>Stream</p>
                        <p>
                            <select name="stream" id="">
                                <option value="">-Slect stream-</option>
                                <option value="BCA">Bca</option>
                                <option value="BBA">Bba</option>
                                <option value="BHM">Bhm</option>
                                <option value="HHA">Hha</option>
                            </select>
                        </p>
                        <p>Subject</p>
                        <p><input type="checkbox" name="subject[]" value="C">c</p>
                        <p><input type="checkbox" name="subject[]" value="C++">c++</p>
                        <p><input type="checkbox" name="subject[]" value="PHP">php</p>
                        <p>image</p>
                        <p><input type="file" name="s_image"></p>


                        <p><input type="submit" name="save" value="save"></p>
                    </form>
                </div>
            </div>
            <!-- Blank End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
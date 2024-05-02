<?php
session_start();

include("./logic/db.php");
if (!isset($_SESSION['userName'])) {
    header("location:signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
    .header {
        top: 65;
    }

    .my-navbar a {
        top: 0;
        font-size: 18px;
        color: black;
        text-decoration: none;
        font-weight: 500;
        margin-left: 35px;
        transition: .3s;

    }

    nav a.bellow:hover,
    nav a.bellow.active {
        background-color: #ccc1a1;
    }
</style>

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
    
    <!-- Icon template -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
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
            <div class="container-fluid pt-4 px-4">
                <header class="row header  bg-light position-fixed d-flex justify-content-evenly z-100 ">
                    <!-- <header class=" "> -->
                    <nav class="navbar my-navbar">
                        <a href="#select" class="active bellow">select</a>
                        <a href="#managecategory" class="bellow">managecategory</a>
                        <a href="#loginhestory" class="bellow">loginhestory</a>
                        <!-- <a href="#pro_view" class="bellow">pro_view</a> -->
                    </nav>
                    <!-- </header> -->
                </header>
            </div>

            <!-- Blank Start -->
            <section class="container-fluid pt-4 px-4" id="select">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <?php
                    include("./select.php")
                    ?>
                </div>
            </section>
            <section class="container-fluid pt-4 px-4" id="managecategory">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <?php
                    include("./managecategory.php")
                    ?>
                </div>
            </section>
            <section class="container-fluid pt-4 px-4" id="loginhestory">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <?php
                    include("./loginhestory.php")
                    ?>
                </div>
            </section>
            <!-- <section class="container-fluid pt-4 px-4" id="pro_view">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <?php
                    // include("./pro_view2.php")
                    ?>
                </div>
            </section> -->
            <!-- Blank End -->


            <!-- Footer Start -->
            <section class="container-fluid pt-4 px-4">
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
            </section>
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
    <script>
        let sections = document.querySelectorAll('section');
        let navLinks = document.querySelectorAll('header nav a');
        window.onscroll = () => {
            sections.forEach(sec => {
                let top = window.scrollY;
                let offset = sec.offsetTop - 150;
                let height = sec.offsetHeight;
                let id = sec.getAttribute('id');

                if (top >= offset && top < offset + height) {
                    navLinks.forEach(links => {
                        links.classList.remove('active');
                        document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
                    });
                };
            });
        };
    </script>

</body>

</html>
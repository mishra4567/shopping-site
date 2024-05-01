<?php
session_start();
include("./logic/db.php");

if (!isset($_SESSION['userName'])) {
    header("location:signin.php");
}
?>
<style>

</style>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Icon Font Stylesheet -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
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
                <div class="col-12">
                    <div class="bg-light rounded p-4 pb-10">
                        <h6 class="mb-4">View Product</h6>
                        <p><a href="./product.php" class="btn btn-success">Add Product</a></p>
                        <div class="table-responsive  tbl-fixed">
                            <?php  
                                if(isset($_SESSION['status']) && $_SESSION['status']!=''){
                                    ?>

                                    <h5><?php echo $_SESSION['status']; ?></h5>
                                    <?php
                                    unset($_SESSION['status']);
                                }
                            ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th class="sticky" scope="col">Product Image</th>
                                        <th class="sticky" scope="col">Id</th>
                                        <th class="sticky" scope="col">Name</th>
                                        <th class="sticky" scope="col">Quntity</th>
                                        <th class="sticky" scope="col">Price</th>
                                        <th class="sticky" scope="col">Tex %</th>
                                        <th scope="col">Cheak</th>
                                        <th class="sticky" scope="col">Action</th>
                                        <th class="sticky" scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $select = "SELECT * FROM product_data";
                                    $resultSet = $conect->query($select);
                                    $i=1;
                                    if ($resultSet->num_rows > 0) {
                                        while ($row = $resultSet->fetch_assoc()) {
                                            $pid = $row['pid'];
                                            $name = $row['name'];
                                            $quntity = $row['quntity'];
                                            $tex = $row['tex'];
                                            $price = $row['price'];
                                            $image = $row['image'];
                                            $status = $row['status'];
                                    ?>
                                            <tr>
                                                <form action="./logic/deedco.php" method="post" enctype="multipart/form-data">
                                                    <td><?php echo $i++; ?></td>
                                                    <td><img style="width:100px; border-radius:5px;" src="../pro_img/<?php echo $row['image']; ?>" name="" class="" /></td>
                                                    <td><input type="text" class="form-control form-control-sm" name="pid" value="<?php echo $pid ?>" disabled></td>
                                                    <td><input type="text" class="form-control form-control-sm" name="name" value="<?php echo $name ?>" disabled></td>
                                                    <td><input type="text" class="form-control form-control-sm" name="quntity" value="<?php echo $quntity ?>" disabled></td>
                                                    <td><input type="text" class="form-control form-control-sm" name="price" value="<?php echo $price ?>" disabled></td>
                                                    <td><input type="text" class="form-control form-control-sm" name="tex" value="<?php echo $tex ?>" disabled></td>
                                                    <td><input type="checkbox" name="deleteID[]" value="<?php echo $pid ?>" id=""></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="./logic/edit_product.php?pid=<?php echo $row['pid'] ?>" class="edit btn" title="Edit" data-toggle="tooltip">
                                                                <i class="material-icons fa-solid fa-pencil"></i></a>
                                                            <a href="?action=delete&pid=<?php echo $pid  ?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Are You Sure')">
                                                                <i class="material-icons btn fa-solid fa-trash-can"></i> </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($row['status'] == 1) {
                                                            echo '<p><a href="./logic/status.php?sid=' . $row['pid'] . '&status=0" class="btn btn-success">Enable</a></p>';
                                                        } else {
                                                            echo '<p><a href="./logic/status.php?sid=' . $row['pid'] . '&status=1" class="btn btn-danger">Disable</a></p>';
                                                        }
                                                        ?>
                                                    </td>
                                                    
                                                
                                            </tr>
                                    <?php }
                                    } ?>
                                    <thead>
                                        <tr>
                                            <th scope="col">Check all</th>
                                            <th scope="col">Actions :</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Copy</th>
                                            <th scope="col"><button type="submit" name="delete">delete</button></th>

                                        </tr>
                                    </thead>
                                </tbody>
                                </form>
                            </table>
                        </div>

                    </div>
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
<?php
include("logic/db.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/custom.css">
  <script src="../assets/js/jquery.js"></script>
</head>

<body>
  <?php include("./navber.php") ?>
  <!-- card  -->
  <div class="container mt-5">
    <?php include("./product.php") ?>
  </div>


  <!-- Remove the container if you want to extend the Footer to full width. -->
  <!-- Footer -->
  <?php include("./footer.php") ?>
  <!-- Footer -->
  <!-- End of .container -->


</body>
<script src="../assets/js/bootstrap.min.js"></script>

</html>
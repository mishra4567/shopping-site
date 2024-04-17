<?php
include("logic/db.php");

$cid = $_GET['cid'];
$query = "SELECT * FROM product_data where pid='$cid'";
$result = $conect->query($query);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $name = $row['name'];
  $quntity = $row['quntity'];
  $price = $row['price'];
  $image = $row['image'];
  $tex = $row['tex'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
  <script src="../assets/js/jquery.js"></script>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/custom.css">
</head>

<body>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Quntity</th>
          <th>Price</th>
          <th>Text Rate %</th>
          <th>GST Rate</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="text" class="form-control form-control-sm text-center" value="<?php echo $name ?>" disabled></td>
          <td><input type="number" class="form-control form-control-sm w-50 text-center" min="1" id="qty" value="<?php echo $quntity ?>"></td>
          <td><input type="text" class="form-control form-control-sm w-50 text-center" value="<?php echo $price ?>" id="price" disabled></td>
          <td><input type="text" class="form-control form-control-sm w-50 text-center" value="<?php echo $tex ?>" id="tex" disabled></td>
          <td><input type="text" class="form-control form-control-sm w-75 text-center" id="gst" disabled></td>
          <td><input type="text" name="total" class="form-control form-control-sm w-100 text-center" id="total" disabled></td>
        </tr>
      </tbody>
    </table>
    <h4 class="mr-5 float-right text-success">Total:-$<span id="demo" class="mr-5 test-success"></span></h4>
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="card">
          <img src="../pro_img/<?php echo $row['image']; ?>" alt="" class="card-img">
          <div class="card-body">
            <h6 class="card-title text-secondary"><?php echo $name ?></h6>
            <h6 class="card-title">Qty: <?php echo $quntity ?></h6>
            <h4 class="card-title text-success">$<?php echo $price ?></h4>
            <div class="buy d-flex justify-content-between align-item-center ">
              <a href="" class="btn btn-warning mt-3"><i class="fas fa-shopping-card"></i>Checkout</a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</body>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/cart_page.js"></script>
<script>

</script>

</html>
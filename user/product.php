<?php
include("logic/db.php");
?>
<div class="row">
    <?php
    $select = "SELECT * FROM product_data WHERE status=1";
    $resultSet = $conect->query($select);
    if ($resultSet->num_rows > 0) {
        while ($row = $resultSet->fetch_assoc()) {
            $name = $row['name'];
            $quntity = $row['quntity'];
            $price = $row['price'];
            $image = $row['image'];
        
    ?>
    <div class="col-sm-6 col-md-6 col-lg-2">
        <div class="card ">
            <img class="card-img" src="../pro_img/<?php echo $row['image']; ?>" alt="<?php echo $row['image'] ?>" />
            
            <div class="card-body">
                <h5 class="card-title text-secondary">Item:<?php echo $name ?></h5>
                <h6 class="card-title">Qty:<?php echo $quntity ?></h6>
                <h4 class="card-title text-success"><b>Price:  </b><?php echo $price ?></h4>
                <div class="buy d-flex justify-content-between align-item-center">
                    <a href="cart_page.php?cid=<?php echo $row['pid'] ?>" class="btn btn-danger"><i class="fas fa-shopping-cart"></i>Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
    <?php } } ?>
</div>
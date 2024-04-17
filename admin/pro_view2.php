<?php
$conect = mysqli_connect("localhost", "root", "", "task-1");
?>
<?php 

?>
<style>
    .tbl-fixed {
        overflow-x: scroll;
        overflow-y: scroll;
        max-height: 70vh;
        max-width: 100%;
    }

    table th {
        position: sticky;
        top: 0;
        text-align: center;
        background-color: #e8d468;
        font-size: 16px;
        margin: 10px;
        padding: 5px;
        border-radius: 10px;

    }

    table.table td .add {
        display: none;
    }
</style>

<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">View Product</h6>
        <p><a href="./product.php" class="btn btn-success">Add Product</a></p>
        <div class="table-responsive  tbl-fixed">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product Image</th>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quntity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Tex %</th>
                        <th scope="col">Action</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select = "SELECT * FROM product_data";
                    $resultSet = $conect->query($select);
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
                                <form enctype="multipart/form-data">
                                    <td><img style="width:100px; border-radius:5px;" src="../pro_img/<?php echo $row['image']; ?>" name="" class="" /></td>
                                    <td><input type="text" class="form-control form-control-sm" name="pid" value="<?php echo $pid ?>" disabled></td>
                                    <td><input type="text" class="form-control form-control-sm" name="name" value="<?php echo $name ?>" disabled></td>
                                    <td><input type="text" class="form-control form-control-sm" name="quntity" value="<?php echo $quntity ?>" disabled></td>
                                    <td><input type="text" class="form-control form-control-sm" name="price" value="<?php echo $price ?>" disabled></td>
                                    <td><input type="text" class="form-control form-control-sm" name="tex" value="<?php echo $tex ?>" disabled></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="./logic/edit_product.php?pid=<?php echo $row['pid'] ?>" class="edit btn" title="Edit" data-toggle="tooltip">
                                                <i class="material-icons text-worning">&#xE254</i></a>
                                            <a href="?action=delete&pid=<?php echo $pid  ?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Are You Sure')">
                                                <i class="btn material-icon text-denger fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <?php 
                                        if($row['status']==1){
                                            echo'<p><a href="./logic/status.php?sid='.$row['pid'].'&status=0" class="btn btn-success">Enable</a></p>';
                                        }else{
                                            echo'<p><a href="./logic/status.php?sid='.$row['pid'].'&status=1" class="btn btn-danger">Disable</a></p>';
                                        }
                                        ?>
                                    </td>
        </div>
        </td>
        </form>
        </tr>
<?php }
                    } ?>
</tbody>
</table>
    </div>
</div>
</div>
<div class="col-12">
    <!-- <div class="bg-light rounded h-100 p-4"> -->
        <h6 class="mb-4">Product Data</h6>
        <p><a href="./product.php" class="btn btn-success">Add new</a></p>
        <!-- <div class="container mx-auto bg-white "> -->
            <!-- <div class="     rouneded shadow tbl-container"> -->
                <!-- <div class=" row tbl-fixed"> -->
                    <!-- <table class="table-striped table-condensed "> -->
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Qutity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Tex %</th>
                                <th scope="col">Product image</th>
                                <th scope="col">DELETE</th>
                                <th scope="col">EDIT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $select = "SELECT * FROM product_data";
                            $resultSet = $conect->query($select);
                            while ($row = $resultSet->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td style="background-color: #acf0a1; border-radius:5px;"><?php echo $row['pid']; ?></th>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['quntity']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td><?php echo $row['tex'] ?></td>
                                    <td><img style="width:100px; border-radius:5px;" src="../pro_img/<?php echo $row['image']; ?>" /></td>
                                    <td><a onclick="return confirm('Are you sure?');" href="" class="btn btn-danger">Delete</a></td>
                                    <td><a href="" class="btn btn-success">Edit</a></td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

include("./logic/db.php");
?>

<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Manage Category</h6>
        <p><a href="./addcategory.php" class="btn btn-success">Add</a></p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Category Id</th>
                        <th scope="col">Category</th>
                        <th scope="col">Parent Name</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select = "SELECT child.*,parent.cat_name as pname FROM `categories` as child LEFT JOIN categories as parent ON child.pid=parent.cid;";
                    $resultSet = $conect->query($select);
                    while ($row = $resultSet->fetch_assoc()) {
                    ?>
                        <tr>
                            <th><?php echo $row['cid']; ?></th>
                            <th><?php echo $row['cat_name']; ?></th>
                            <th><?php echo $row['pname']; ?></th>
                            <th><a onclick="return confirm('Are you sure?')" href="./logic/delcat.php?catId=<?php echo $row['cid'] ?>" class="btn btn-danger">Delete</a></th>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
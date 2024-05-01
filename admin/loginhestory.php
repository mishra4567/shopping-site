<?php

include("./logic/db.php");
?>

<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Login Hestory</h6>
        <p><a href="./signup.php" class="btn btn-success">Add Account</a></p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">User Password</th>
                        <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select = "SELECT * FROM admin";
                    $resultSet = $conect->query($select);
                    while ($row = $resultSet->fetch_assoc()) {
                    ?>
                        <tr>
                            <th><?php echo $row['admin_id'] ?></th>
                            <th><?php echo $row['name'] ?></th>
                            <th><?php echo $row['email'] ?></th>
                            <th><?php echo $row['password'] ?></th>
                            <th><?php echo $row['current_time'] ?></th>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
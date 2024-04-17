<?php 
    $conect=mysqli_connect("localhost","root","","task-1");
?>

<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Student Data</h6>
        <p><a href="./insert.php" class="btn btn-success">Add new</a></p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Stream</th>
                        <th scope="col">Subject</th>
                        <th scope="col">image</th>
                        <th scope="col">DELETE</th>
                        <th scope="col">EDIT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $select ="SELECT * FROM student_data";
                    $resultSet=$conect->query($select);
                    while($row=$resultSet->fetch_assoc()){
                    ?>
                    <tr>
                        <th><?php echo $row['sid']; ?></th>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['stream']; ?></td>
                        <td><?php echo $row['subject']; ?></td>
                        <!-- <td><img src="../" alt=""></td> -->
                        <td><img style="width:100px;" src="../user_img/<?php
                         echo $row['image']; 
                         ?>"/></td>
                        <td><a onclick="return confirm('Are you sure?');" href="./logic/delete.php?did=<?php echo $row['sid']  ?>" class="btn btn-danger" >Delete</a></td>
                        <td><a href="./edit.php?eid=<?php echo $row['sid'] ?>" class="btn btn-success">Edit</a></td>
                    </tr>
                    <?php 
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
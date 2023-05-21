<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php

    $conn =mysqli_connect('localhost','root','','Student');
    $sql = "SELECT * FROM st_info";
    $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query)>0){
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Mail</th>
        <th>Phone</th>
        <th>Department</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?php echo $row['st_id'];?></td>
                <td><?php echo $row['st_name'];?></td>
                <td><?php echo $row['st_mail'];?></td>
                <td><?php echo $row['st_phone'];?></td>
                <td><?php echo $row['department'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['st_id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['st_id']; ?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</div>
</div>
</body>
</html>

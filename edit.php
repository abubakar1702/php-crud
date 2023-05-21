<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php

    $conn =mysqli_connect('localhost','root','','Student');

    $getId = $_GET['id'];

    $sql = "SELECT * FROM st_info WHERE st_id={$getId}";
    $query = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($query)>0){
        while($row = mysqli_fetch_assoc($query)){

    ?>
    <form class="post-form" action="updatedata.php" method="post">
    <div class="form-group">
        <label>Name</label>
        <input type="hidden" name="sid" value="<?php echo $row['st_id']; ?>"/>
        <input type="text" name="sname" value="<?php echo $row['st_name']; ?>"/>
    </div>
    <div class="form-group">
        <label>Mail</label>
        <input type="text" name="smail" value="<?php echo $row['st_mail']; ?>"/>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="sphone" value="<?php echo $row['st_phone']; ?>"/>
    </div>
    <div class="form-group">
        <label>Department</label>
        <?php
        $sql1 = "SELECT * FROM department";
        $query1 = mysqli_query($conn,$sql1);
    
        if(mysqli_num_rows($query)>0){
            echo '<select name="sdepartment">';
        while($row1 = mysqli_fetch_assoc($query1)){
            if($row['department'] == $row1['d_id']){
                $Select = "selected";
            }else{

                $Select = "";
            }
           echo "<option {$Select} value='{$row1['d_id']}'>{$row1['d_name']}</option>";
        }
        echo '</select>';
    }
        ?>
    </div>
    <input class="submit" type="submit" value="Update"/>
    </form>
    <?php }
    } ?>
</div>
</div>
</body>
</html>

<?php include 'header.php'; ?>

<?php
$conn = mysqli_connect('localhost','root','');
?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Mail</label>
            <input type="mail" name="smail" />
        </div>
        
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <div class="form-group">
            <label>Department</label>
            <select name="sdepartment">
                <option value="" selected disabled>Select Department</option>
                <?php
                $conn =mysqli_connect('localhost','root','','Student');
                $sql = "SELECT * FROM department";
                $query = mysqli_query($conn,$sql);

                while($row = mysqli_fetch_assoc($query)){
                ?>
                <option value="<?php echo $row['d_id'];?>"><?php echo $row['d_name'];?></option>
                <?php } ?>
            </select>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>

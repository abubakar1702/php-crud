<?php
$ID = $_POST['sid'];
$Name = $_POST['sname'];
$Mail = $_POST['smail'];
$Phone = $_POST['sphone'];
$Department = $_POST['sdepartment'];




$conn =mysqli_connect('localhost','root','','Student');
$sql = "UPDATE st_info
SET st_name = '{$Name}',st_mail='{$Mail}', st_phone = '{$Phone}', department ='{$Department}' WHERE st_id = '{$ID}'";
$query = mysqli_query($conn,$sql);

header("Location: http://localhost/crud_html/index.php");

mysqli_close($conn);


?>
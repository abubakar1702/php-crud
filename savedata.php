<?php
echo $Name = $_POST['sname'];
echo $Mail = $_POST['smail'];
echo $Phone = $_POST['sphone'];
echo $Department = $_POST['sdepartment'];




$conn =mysqli_connect('localhost','root','','Student');
$sql = "INSERT INTO st_info(st_name,st_mail,st_phone,department)
VALUES('{$Name}','{$Mail}','{$Phone}','{$Department}')";
$query = mysqli_query($conn,$sql);

header("Location: http://localhost/crud_html/add.php");

mysqli_close($conn);
?>
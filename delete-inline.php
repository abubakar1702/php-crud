<?php

$getID = $_GET['id'];

$conn =mysqli_connect('localhost','root','','Student') or die ("Connection failed!");
$sql = "DELETE FROM st_info WHERE st_id = $getID";

$query = mysqli_query($conn, $sql) or die("Query failed");

header("Location: http://localhost/crud_html/index.php");

mysqli_close($conn);
?>
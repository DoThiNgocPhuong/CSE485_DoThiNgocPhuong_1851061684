<?php
require('dbconfig.php');
$id = $_GET['id'];
$sql = "DELETE FROM skill WHERE id ='$id'";
mysqli_query($connect,$sql);
header("Refresh: 0; url=admin.php");

?>
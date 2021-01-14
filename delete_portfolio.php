<?php
require('dbconfig.php');
$id = $_GET['id'];
$sql = "DELETE FROM portfolio WHERE id ='$id'";
mysqli_query($connect,$sql);
header("Refresh: 0; url=admin.php");

?>
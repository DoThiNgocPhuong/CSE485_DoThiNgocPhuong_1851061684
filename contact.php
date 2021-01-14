<?php
require('dbconfig.php');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sql_contact = "INSERT INTO contact (`name`, `email`, `subject`, `message`) VALUES('$name', '$email', '$subject', '$message')";

mysqli_query($connect,$sql_contact);
header("Refresh: 0; url=index.php");

?>
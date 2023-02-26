<?php

include("dbconnect.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "insert into users(email, password) values('$email', '$password')";
if($conn->query($sql)===TRUE)
{
	echo "Insertion Successful";
	label:header("Location:show.php");
}
else
{
	die("Insertion Error: " . $conn->error);
}

?>

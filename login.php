<?php

include("dbconnect.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from users";
$result = $conn->query($sql);
if($result->num_rows<=0)
{
	die("No records");
}
$rows = $result->fetch_all(MYSQLI_ASSOC);
$authorized=FALSE;
foreach($rows as $row)
{
	if ($row['email'] == $email)
	{
		if($row['password'] == $password)
		{
			$authorized = TRUE;
			break;
		}
	}
}

if($authorized)
{
	echo "Authorized";
}
else
{
	echo "Incorrect Email or Password";
}


?>

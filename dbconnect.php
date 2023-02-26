<?php

$servername = "localhost";
$username="root";
$password="";
$dbname="mydb";

$conn = new mysqli($servername,$username, $password, $dbname);

if($conn->connect_error)
    die("Connection error: " . $conn->connect_error);
echo '<span style="color:red">C</span><span style="color:green">o</span><span style="color:blue">n</span><span style="color:orange">n</span><span style="color:purple">e</span><span style="color:teal">c</span><span style="color:brown">t</span><span style="color:red">i</span><span style="color:grey">o</span><span style="color:teal">n</span>&nbsp;<span style="color:hotpink">S</span><span style="color:mediumvioletred">u</span><span style="color:rebeccapurple">c</span><span style="color:blue">c</span><span style="color:mediumaquamarine">e</span><span style="color:steelblue">s</span><span style="color:goldenrod">s</span><span style="color:lightslategray">f</span><span style="color:sienna">u</span><span style="color:deeppink">l</span><br><hr>';
?>

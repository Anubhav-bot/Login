<html>
<head>
<title>Show</title>
</head>
<body>
<table border=1>
<thead>
<tr>
    <th>Email</th>
    <th>Password</th>
</tr>
</thead>

<tbody>
    <?php
        include("../php/database/dbconnect.php");
        $sql="select * from users";
        $result = $conn->query($sql);
        if($result->num_rows>0)
        {
            $rows=$result->fetch_all(MYSQLI_ASSOC);
        }

        foreach($rows as $row)
        {
    ?>
        <tr>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['password'];?></td>
        </tr>
    <?php } ?>
</tbody>
</table>
</body>
</html>

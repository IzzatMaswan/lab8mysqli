<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include 'conn.php';

$sql="insert into user (first_name, last_name, email, pass_word)
values ('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[pass_word]','$_POST[registration_date]')";
    if (!mysqli_query($conn, $sql))
    {
        die('Error: ' .mysqli_error());
    }
    echo "1 record successfully added...";
?>
</body>
</html>
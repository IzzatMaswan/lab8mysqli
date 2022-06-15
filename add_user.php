<?php
include 'conn.php';

$sql="insert into user (first_name, last_name, email, pass_word)
value ($_post[firstname]','$_post [lastname]','$_post[email]','$_post[password]','$_post[reg_date]')";
    if (!mysqli_query($conn, $sql)){
        die('Error: '.mysqli_error());
    }
    echo "1 record successfully added...";
    
?>
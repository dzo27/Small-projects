<?php
//Connect to mysqli
$con = mysqli_connect("localhost", "root", "coderslab", "shoutit");

//Test connection
if (mysqli_errno($con)) {
    die("Failed to connect: " . mysqli_conect_error());
}
?>

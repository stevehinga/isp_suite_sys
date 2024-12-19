<?php

$conn = mysqli_connect("localhost","root","Systemadmin@2001","isp_sys");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

mysqli_close($conn);
?>

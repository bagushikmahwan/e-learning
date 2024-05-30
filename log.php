<?php
include "config.php";
$file    = $_GET['file'];
$data    = explode("/", $file);
$filename = $data[3];
$kuery   = "update uploads set klik=klik+1 where file_name='$filename'";
mysqli_query($conn,$kuery);
header("Location: $file");
?>
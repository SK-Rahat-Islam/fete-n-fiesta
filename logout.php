<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fete");

session_start();
session_unset();
session_destroy();

header('location:index.php');
?>

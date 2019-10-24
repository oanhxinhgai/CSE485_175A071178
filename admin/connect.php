<?php 
    $db_user = "root";
    $db_host = "localhost";
    $db_pass = "";
    $db_database = "admin";

    $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_database)
    or die("Cannot connect to database");
?>
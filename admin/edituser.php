<?php
include_once("connect.php");
$id = $_GET["id"];

  $query = "DELETE FROM users WHERE userid=$id";

  mysqli_query($conn, $query);

  header("Location: user.php");
?>
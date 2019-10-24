<?php
include_once("connect.php");
$id = $_GET["id"];

  $query = "DELETE FROM news WHERE newid=$id";

  mysqli_query($conn, $query);

  header("Location: new.php");
?>
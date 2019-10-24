<?php
session_start();
unset($_SESSION["level"]); 
header("Location: login.php");
?>
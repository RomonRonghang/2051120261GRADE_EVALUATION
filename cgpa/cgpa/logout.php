<?php
session_start();
unset($_SESSION["logged_in"]);
unset($_SESSION["user_name"]);
header("location:start.php");
?>

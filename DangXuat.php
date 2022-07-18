<?php 
include('Account/Config.php');
session_destroy();
header("Location: index.php");
?>
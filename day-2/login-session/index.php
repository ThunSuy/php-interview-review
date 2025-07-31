<?php 
session_start();
if (!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

echo "<h3> Hello " . $_SESSION['user'] ."</h3>";
echo "<a href='logout.php'>Logout</a>";
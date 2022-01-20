<?php
session_start();
include("db.php");
$user = $_SESSION["user"];

$sql = "UPDATE cart SET status=1 WHERE user = '$user'";

mysqli_query($conn, $sql);
echo "Your order has been placed, click <a href='mainPage.php'>here</a> to go back to the main page.";
?>
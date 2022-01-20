<?php
include("db.php");


$user = $_POST["user"];

$sql= "DELETE FROM cart WHERE user = $user AND status = 1";
mysqli_query($conn, $sql);

?>
<title>Order accepted page</title>
<p>Back to order page<a href="orders.php">Click here</a></p>
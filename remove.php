<?php

include("db.php");
$array = $_POST["order"];
$array = explode('"', $array);
$id = $array[2];
print_r($id);

$sql = "DELETE FROM cart Where id = $id";


mysqli_query($conn, $sql);

header("location: checkOut.php");


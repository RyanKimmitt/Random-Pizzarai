<?php

include("db.php");
$user = $_POST["user"];
$newuser = explode('"', $user);
$userName = $newuser[2];


$sql = "UPDATE users SET admin=1 WHERE user = '$userName'";
$result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
    echo "Promotion successful";
  } else {
    echo "Error promoting employee: " . $conn->error;
  }

  ?>

  <title>Employee promtion page</title>
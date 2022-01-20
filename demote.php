<?php

include("db.php");
$user = $_POST["user"];
$newuser = explode('"', $user);
$userName = $newuser[2];


$sql = "UPDATE users SET admin=0 WHERE user = '$userName'";
$result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
    echo "Demote successful";
  } else {
    echo "Error updating demoting: " . $conn->error;
  }

  ?>

  <title>Employee demotion page</title>
<h1>Welcome to Our site || Login <a href="index.html">here</a></h1>
<title>Signup welcome</title>

<?php

session_start();
include("db.php");
if (array_key_exists("submit", $_POST)) {

    $user = $_POST["uname"];
    $password = $_POST["password"];
    $adress = $_POST["adress"];
    $info = [];

    $result = mysqli_query($conn, "SELECT * FROM users");


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $rowInfo = [$row["user"], $row["pass"], $row["admin"]];
            array_push($info, $rowInfo);
        }
    }
}



$l = count($info);
for ($i = 0; $i < $l; $i++) {

    if ($info[$i][0] == $user) {
        header("Location: signupfail.html");
        die;
    }
}

$sql = "INSERT INTO users " . "(user, pass, admin, adress) " . "VALUES('$user','$password','0','$adress')";
if (mysqli_query($conn, $sql)) {
    echo "Sign up succesfull";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

<?php
session_start();
include("db.php");
if (array_key_exists("submit", $_POST)) {

    $user = $_POST["uname"];
    $password = $_POST["password"];
    $info = [];

    $result = mysqli_query($conn, "SELECT * FROM users");


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $rowInfo = [$row["user"], $row["pass"], $row["admin"]];
            array_push($info, $rowInfo);
        }
    }

    $l = count($info);
    for ($i = 0; $i < $l; $i++) {

        if ($info[$i][0] == $user && $info[$i][1] == $password) {
            $_SESSION["user"] = $user;
            if ($info[$i][2] == 1) {
                header("Location: admin.html");
                die;
            } else if ($info[$i][2]) {
                header("Location: owner.html");
                die;

            } else {
                header("Location: mainPage.php");
                die;
            }
        }
    }
    header("Location: loginFail.html");
}

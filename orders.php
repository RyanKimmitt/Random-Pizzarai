<h1>Orders</h1>

<?php

include("db.php");

$sql = "SELECT DISTINCT user FROM cart WHERE status = 1";
$result = mysqli_query($conn, $sql);
$info = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $rowInfo = $row["user"];
        array_push($info, $rowInfo);
    }
}


for ($i = 0; $i < count($info); $i++) {
    $user = $info[$i];
    $sql = "SELECT * FROM cart WHERE user = '$user' AND status = 1";
    $result = mysqli_query($conn, $sql);
    $numPizza =  mysqli_num_rows($result);
    $sql1 = "SELECT adress FROM users WHERE user = '$user'";
    $result1 = mysqli_query($conn, $sql1);
    $adress = [];
    if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_array($result1)) {
            $rowInfo = $row["adress"];
            array_push($adress, $rowInfo);
        }
    }


    echo "<form method = 'post' action = 'finOrder.php'><button>SELECT</button> User: '\"$user\"' Pizza's ordered: '\"$numPizza\"' Adress:'\"$adress[0]\"'<input type='text' value='\"$user\"' class='hide' name='user'> </form>";

    
}


?>

<style>
    .hide {

        display: none;
    }
</style>

<title>Order display page</title>
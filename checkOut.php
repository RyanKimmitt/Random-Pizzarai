<h1>Your order:</h1>
<?php
session_start();

include("db.php");
$user = $_SESSION["user"];
$result = mysqli_query($conn, "SELECT * FROM cart WHERE status=0");
$info = [];
$order = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $rowInfo = [$row["user"], $row["pizza"], $row["toppings"], $row["id"]];
        array_push($info, $rowInfo);
    }
}
if ($info == []) {
    echo "Your cart is empty, click <a href='mainPage.php'>here</a> and go get some pizza <br>";
}
$l = count($info);
for ($i = 0; $i < $l; $i++) {

    if ($info[$i][0] == $user) {
        array_push($order, $info[$i]);
    }
}

for ($i = 0; $i < count($order); $i++) {
    $Jorder = json_encode($order[$i][3]);
    echo json_encode($order[$i][1]) . " " . json_encode($order[$i][2]) . "<form method='post' action ='remove.php'><h1><button>Remove</button></h1><input type='text' value='\"$Jorder\"' class='hide' name='order'></form>";
}

?>
<style>
    .hide {

        display: none;
    }
</style>

<form action="order.php">
    <button>Place Order</button>
</form>

<title>check out page</title>
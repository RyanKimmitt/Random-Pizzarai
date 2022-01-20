<?php
session_start();
include("db.php");

$pizzaOrder = json_decode($_POST['inputText']);
$pizzaOrder = json_decode(json_encode($pizzaOrder), true);

$id = rand(1, 9999999);
$result = mysqli_query($conn, "SELECT * FROM cart");
$info = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $rowInfo = $row["id"];
        array_push($info, $rowInfo);
    }
}
function check($id)
{
    global $info;
    if (in_array($id, $info)) {
        $id = rand(1, 9999999);
        check($id);
    }
}
check($id);
$user = $_SESSION["user"]; 
$pizzaType = $pizzaOrder['Pizza'];
$toppings = array_except($pizzaOrder, 'Pizza');
$toppings = json_encode($toppings);

function array_except($array, $keys)
{
    return array_diff_key($array, array_flip((array) $keys));
}


$sql = "INSERT INTO cart " . "(user, pizza,toppings, id) " . "VALUES('$user','$pizzaType','$toppings','$id')";
if (mysqli_query($conn, $sql)) {
    echo "Succesfully added to cart";
    include("return.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>


<title>Insert to cart page</title>
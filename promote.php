<?php

include("db.php");

$result = mysqli_query($conn, "SELECT * FROM users");
$info = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $rowInfo = [$row["user"], $row["pass"], $row["admin"]];
        array_push($info, $rowInfo);
    }
}

for ($i = 0; $i < count($info); $i++) {
    $Jinfo = json_encode($info[$i][0]);
    $text = $info[$i][0];
    if ($info[$i][2] == 0) {
       
        echo "<p>\"$text\"</p> <form action = 'admin.php' method='post' ><button>Promote</button><input class = 'hide' name='user' value = '\"$Jinfo\"'></input></form> ";
    }
    if($info[$i][2] == 1){
        echo "<p>\"$text\"</p> <form action = 'demote.php' method='post' ><button>Demote</button><input class = 'hide' name='user' value = '\"$Jinfo\"'></input></form> ";
    }
}

?>
<p></p>
<style>
.hide{

    display: none;
}
</style>
<title>Employee management page</title>
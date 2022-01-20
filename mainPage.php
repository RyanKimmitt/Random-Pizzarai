<html>
<link rel="stylesheet" href="mainPage.css">
<title>Random Pizza: menu page</title>
<body>
    <h1>Welcome to Random Pizzaria</h1>


    <?php include("slideShow.html");?>

    

    <hr>
    <div>
        <img src="imgs/meatlovers.jpg" width="70%">
        <h1> Meat lovers pizza</h1>
        <form action="meatlovers.php">
            <button>Add to cart</button>
        </form>
        <hr>
    </div>

    <div>
        <img src="imgs/newYork.jpg" width="70%">
        <h1>NewYork pizza</h1>
        <form action="newYork.php">
            <button>Add to cart </button>
        </form>
        <hr>
    </div>

    <div>
        <img src="imgs/cookie.jpg" width="70%">
        <h1>Dessert pizza</h1>
        <form action="dessert.php">
            <button>Add to cart </button>
        </form>
        <hr>
    </div>

<!-- checkout -->
<div>
<form action="checkOut.php">
    <button>Checkout</button>
</form>

<hr>
</div>
</body>






</html>
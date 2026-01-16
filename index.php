<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Food item name: </label>
        <input type="text" name="fooditem">
        <br>
        <label>Quantity: </label>
        <input type="text" name="quantity">
        <input type="submit" value="Place Order">

    </form>

    
</body>
</html>

<?php 

$fooditem = $_POST["fooditem"];
$quantity = $_POST["quantity"];
$price = 10;
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} {$fooditem}s <br>";
echo "Your total is: {$total} <br>";
echo "<h1>ENJOY!!</h1>"
?>
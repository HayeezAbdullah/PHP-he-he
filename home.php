<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    HOME HOME HOME HOME HOME
    <br>
    <a href="index.php">Go back</a> <br>

</body>
</html>


<?php
echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

?>
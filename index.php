<?php
include("database.php");

$username = "batman";
$password = "batmanisfr";

$sql = "INSERT INTO user (user, password) VALUES ('$username', '$password')";

try {
    mysqli_query($conn, $sql);
    echo "User is now registered";
} catch (mysqli_sql_exception) {
    echo "Could not register user";    
}
?>
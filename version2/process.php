<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform login logic here (e.g., check against a database)
    echo "Welcome, This is admin " . htmlspecialchars($username) . "<br>";

}
?>

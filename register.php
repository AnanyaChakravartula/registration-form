<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Simulate saving to database
    echo "<h1>Thank you for registering!</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Phone: $phone</p>";
} else {
    echo "<h2>Invalid Request</h1>";
}
?>

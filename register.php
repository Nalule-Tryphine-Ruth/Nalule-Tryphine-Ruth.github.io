<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash the password

    // Store the user's data in your database (replace this with your database code)
    // For example, using PDO for MySQL:
    // $db = new PDO("mysql:host=localhost;dbname=your_database", "your_username", "your_password");
    // $query = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    // $query->execute([$username, $password]);

    // Redirect the user to the login page after successful registration
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Account</title>
    <link rel="stylesheet" href="edit_account.css">
</head>
<body>

<div class="container">

<h1>Edit Account</h1>

<p>Change your account details below:</p>

<form method="post">
    <p>Username:</p>
    <input type="text" name="username">

    <p>Password:</p>
    <input type="password" name="password">

    <p>Email:</p>
    <input type="email" name="email">

    <p>Age:</p>
    <input type="number" name="age">

    <button type="submit">Save Changes</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    echo "<h3>Updated Details:</h3>";
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age;
}
?>

</div>

</body>
</html>
</body>
</html>

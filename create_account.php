<!DOCTYPE html>
<html>
<head>
    <title>BookHub Create Account</title>
    <link rel="stylesheet" href="create_account.css">
</head>
<body>

<div class="container">

<h1>BOOKHUB</h1>

<img src="profile.png" alt="profile icon" width="40">
<span>...</span>

<h2>Create Account</h2>

<form method="post">
    <p>First Name:</p>
    <input type="text" name="firstname">

    <p>Last Name:</p>
    <input type="text" name="lastname">

    <p>Email:</p>
    <input type="email" name="email">

    <p>Password:</p>
    <input type="password" name="password">

    <br><br>

    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "<h3>Account Created:</h3>";
    echo "First Name: " . $firstname . "<br>";
    echo "Last Name: " . $lastname . "<br>";
    echo "Email: " . $email . "<br>";
}
?>

</div>

</body>
</html>
</body>
</html>

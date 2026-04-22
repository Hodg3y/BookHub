<!DOCTYPE html>
<html>
<head>
    <title>BookHub Login</title>

    <link rel="stylesheet" href="login.css">
</head>

<body>

<div class="container">

<h1>BOOKHUB</h1>

<img src="profile.png" alt="profile icon" width="40">
<span>...</span>

<h2>Login</h2>

<form method="post">

<p>Email:</p>
<input type="email" name="email">

<p>Password:</p>
<input type="password" name="password">

<br><br>

<button type="submit">Submit</button>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "<h3>Login Attempt:</h3>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password;
}
?>

</div>

</body>
</html>
</body>
</html>

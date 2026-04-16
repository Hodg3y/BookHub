<!DOCTYPE html>
<html>
<head>
    <title>Edit Account</title>
</head>
<body>

    <h1>Edit Account</h1>

    <p>Change your account details below:</p>

    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email"><br><br>

        <label>Age:</label><br>
        <input type="number" name="age"><br><br>

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

</body>
</html>
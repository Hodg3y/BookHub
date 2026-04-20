<?php
/* Config */
$host = "localhost"; 
$dbname = ""; 
$username = "root"; 
$password = "";
$message = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //Make sure account is logged in
    $bookCount = $pdo->query("SELECT COUNT(*) FROM books")->fetchColumn();
} catch (PDOException $e) {
    $message = "Connection error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Bookhub - Home</title>
 
</head>

<body>

    <h1>Bookhub Dashboard</h1>
    <nav>
        <strong>Navigation:</strong> 
        <a href="index.php">Home</a> | 
        <a href="edit_book.php">Edit Books</a> | 
        <a href="view_fines.php">View Fines</a>
    </nav>

    <main>

        <h2>Library Overview</h2>
        <div class="stats-card">
            <p>Total Books in System:</p>
            <h3><?php echo $bookCount; ?></h3>
        </div>
        <p><?php echo $message; ?></p>
        
    </main>

</body>
</html>
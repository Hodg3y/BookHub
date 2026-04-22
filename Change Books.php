<?php
/* Config */
$host = "localhost"; 
$dbname = ""; 
$username = "root"; 
$password = "";
$message = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) { $message = "Connection failed."; }

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_book'])) {
    $bookId = $_POST['book_id'];
    $fieldToEdit = $_POST['editField'];
    $allowedFields = ['title'=>'bookTitle', 'author'=>'bookAuthor', 'isbn'=>'bookIsbn', 'date'=>'publishDate', 'genre'=>'Genre'];

    if (array_key_exists($fieldToEdit, $allowedFields)) {
        $column = $allowedFields[$fieldToEdit];
        $newValue = $_POST[$column];
        $sql = "UPDATE books SET $column = :val WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([':val' => $newValue, ':id' => $bookId])) {
            $message = "Update successful!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Bookhub - Edit Book</title> 

</head>

<body>

    <h1>Manage Books</h1>
    <nav>
        <a href="home.php">Home</a> | <a href="edit_book.php">Edit Books</a> | <a href="view_fines.php">View Fines</a> <!-- Links to other pages -->
    </nav>

    <p><?php echo $message; ?></p>

    <form action="" method="POST"> <!-- Display -->

        Book ID: <input type="number" name="book_id" required><br><br> <!-- Header -->
        
        Change: 
        <select id="editField" name="editField" required>
            <option value="">Selection</option>
            <option value="title">Title</option>
            <option value="author">Author</option>
            <option value="isbn">ISBN</option>
            <option value="date">Date</option> <!-- Options -->
            <option value="genre">Genre</option>
        </select>

        <div id="titleSection" class="field-group">New Title: <input type="text" name="bookTitle"></div>
        <div id="authorSection" class="field-group">New Author: <input type="text" name="bookAuthor"></div>
        <div id="isbnSection" class="field-group">New ISBN: <input type="text" name="bookIsbn"></div>
        <div id="dateSection" class="field-group">New Date: <input type="date" name="publishDate"></div>
        <div id="genreSection" class="field-group">New Genre: <input type="text" name="Genre"></div>

        <br><button type="submit" name="update_book">Apply Changes</button>

    </form>

    <script>

        const select = document.getElementById("editField");
        const sections = {title:"titleSection", author:"authorSection", isbn:"isbnSection", date:"dateSection", genre:"genreSection"}; //script for dropdown table, taken from geeksforgeeks.com
        
        select.addEventListener("change", function() {
            Object.values(sections).forEach(id => document.getElementById(id).style.display = "none");
            if(sections[this.value]) document.getElementById(sections[this.value]).style.display = "block";
        });

    </script>

</body>
</html>
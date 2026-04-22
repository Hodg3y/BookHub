<?php include 'header.php'; include 'db_connect.php'; ?>

<main style="padding: 20px; max-width: 500px; margin: auto;">
    <h2>Enter New Book Details</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isbn = $conn->real_escape_string($_POST['isbn']);
        $title = $conn->real_escape_string($_POST['title']);
        $author = $conn->real_escape_string($_POST['author']);
        $year = intval($_POST['published']);
        $genre = $conn->real_escape_string($_POST['genre']);
        $desc = $conn->real_escape_string($_POST['description']);

        $sql = "INSERT INTO BookDescribed (ISBN, Title, Author, Published, Genre, Description) 
                VALUES ('$isbn', '$title', '$author', $year, '$genre', '$desc')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>Book successfully added to catalog.</p>";
        } else {
            echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
        }
    }
    ?>
    <form action="add_book.php" method="post" style="display: flex; flex-direction: column; gap: 10px;">
        <label>ISBN:</label>
        <input type="text" name="isbn" required style="padding: 8px;">
        <label>Title:</label>
        <input type="text" name="title" required style="padding: 8px;">
        <label>Author:</label>
        <input type="text" name="author" required style="padding: 8px;">
        <label>Year:</label>
        <input type="number" name="published" required style="padding: 8px;">
        <label>Genre:</label>
        <input type="text" name="genre" required style="padding: 8px;">
        <label>Description:</label>
        <textarea name="description" rows="4" style="padding: 8px;"></textarea>
        <input type="submit" value="Add Book" style="background-color: #a0ac90; color: white; border: none; padding: 12px; cursor: pointer; font-weight: bold;">
    </form>
</main>
</body></html>
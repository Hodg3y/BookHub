<!DOCTYPE html>
<html>
<head>
    <title>Take Out a Book</title>
</head>
<body>

    <h1>Take Out a Book</h1>

    <p>Search for available books:</p>

    <form method="post">
        <input type="text" name="search" placeholder="Enter book name">
        <button type="submit">Search</button>
    </form>

    <h2>Available Books</h2>

    <form method="post">
        <div>
            <p>Title: 1984</p>
            <p>Author: George Orwell</p>
            <button type="submit" name="book" value="1984">Take Out</button>
        </div>

        <br>

        <div>
            <p>Title: Pride and Prejudice</p>
            <p>Author: Jane Austen</p>
            <button type="submit" name="book" value="Pride and Prejudice">Take Out</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["search"])) {
            $search = $_POST["search"];
            echo "<p>You searched for: " . $search . "</p>";
        }

        if (isset($_POST["book"])) {
            $book = $_POST["book"];
            echo "<h3>You took out: " . $book . "</h3>";
        }
    }
    ?>

</body>
</html>
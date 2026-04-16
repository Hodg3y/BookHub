<?php include 'header.php'; ?>

<main style="padding: 20px;">
    <h2>Search for Books</h2>
    <form action="search_books.php" method="get" style="margin-bottom: 30px; display: flex; gap: 10px;">
        <select name="filter" style="padding: 10px; border: 1px solid #a0ac90; border-radius: 4px;">
            <option value="title">Title</option>
            <option value="author">Author</option>
            <option value="genre">Genre</option>
        </select>
        
        <input type="text" name="query" placeholder="Enter keywords..." style="padding: 10px; flex-grow: 1; max-width: 300px; border: 1px solid #a0ac90; border-radius: 4px;">
        <input type="submit" value="Search" style="background-color: #a0ac90; color: #ede6df; border: none; padding: 5px 20px; cursor: pointer; border-radius: 4px;">
    </form>

    <div id="results">
        <h3>Library Results</h3>
        <?php
        if(isset($_GET['query'])) {
            echo "<p>Searching for: <strong>" . htmlspecialchars($_GET['query']) . "</strong></p>";
        } else {
            echo "<p>Use the bar above to find books by title, author, or genre.</p>";
        }
        ?>
    </div>
</main>
</body>
</html>
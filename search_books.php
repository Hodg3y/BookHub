<?php include 'header.php'; include 'db_connect.php'; ?>

<main style="padding: 20px; max-width: 800px; margin: auto;">
    <h2>Search the Library</h2>
    <form action="search_books.php" method="GET" style="display: flex; gap: 10px; margin-bottom: 30px;">
        <input type="text" name="query" placeholder="Enter keywords..." style="padding: 10px; flex-grow: 1;">
        <button type="submit" style="padding: 10px 20px; background-color: #a0ac90; color: white; border: none; cursor: pointer;">Search</button>
    </form>

    <div id="results">
        <?php
        if (isset($_GET['query'])) {
            $search = $conn->real_escape_string($_GET['query']);
            $sql = "SELECT * FROM BookDescribed WHERE Title LIKE '%$search%' OR Author LIKE '%$search%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div style='background: white; padding: 15px; margin-bottom: 10px; border-left: 5px solid #a0ac90;'>";
                    echo "<strong>" . $row['Title'] . "</strong><br><em>By " . $row['Author'] . " (" . $row['Published'] . ")</em>";
                    echo "<p>" . $row['Description'] . "</p></div>";
                }
            } else { echo "No matches found."; }
        }
        ?>
    </div>
</main>
</body></html>
<?php include 'header.php'; ?>

<main style="padding: 20px;">
    <h2>Enter new book details</h2>
    <form action="db_add_book.php" method="post" style="display: flex; flex-direction: column; max-width: 400px;">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required style="margin-bottom: 10px; border: 1px solid #a0ac90; padding: 5px;">

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required style="margin-bottom: 10px; border: 1px solid #a0ac90; padding: 5px;">

        <label for="published">Published:</label>
        <input type="date" id="published" name="published" required style="margin-bottom: 10px; border: 1px solid #a0ac90; padding: 5px;">

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required style="margin-bottom: 10px; border: 1px solid #a0ac90; padding: 5px;">

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" style="margin-bottom: 15px; border: 1px solid #a0ac90; padding: 5px;"></textarea>

        <input type="submit" value="Add Book" style="background-color: #a0ac90; color: #ede6df; border: none; padding: 10px; cursor: pointer; font-weight: bold;">
    </form>
</main>
</body>
</html>
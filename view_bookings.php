<!DOCTYPE html>
<html>
<head>
    <title>View Bookings</title>
</head>
<body>

    <h1>Your Bookings</h1>

    <p>These are your current bookings:</p>

    <?php
    echo "<div>";
    echo "<h3>Booking 1</h3>";
    echo "<p>Booking ID: 1001</p>";
    echo "<p>Book: The Great Gatsby</p>";
    echo "<p>Time Out: 10/03/2026</p>";
    echo "<p>Due Date: 24/03/2026</p>";
    echo "<p>Returned: No</p>";
    echo "</div>";

    echo "<br>";

    echo "<div>";
    echo "<h3>Booking 2</h3>";
    echo "<p>Booking ID: 1002</p>";
    echo "<p>Book: 1984</p>";
    echo "<p>Time Out: 01/03/2026</p>";
    echo "<p>Due Date: 15/03/2026</p>";
    echo "<p>Returned: Yes</p>";
    echo "</div>";
    ?>

</body>
</html>
<?php
/* Config */
$host = "localhost"; 
$dbname = ""; 
$username = "root"; 
$password = "";
$fines_data = [];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    /* Get the bookings not returned */
    $query = "SELECT users.name, bookings.borrow_date 
              FROM bookings 
              JOIN users ON bookings.user_id = users.id 
              WHERE bookings.return_status = 'borrowed'";
              
    $stmt = $pdo->query($query);
    $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

    /* calculate fines */
    foreach ($bookings as $b) {
        $borrowDate = new DateTime($b['borrow_date']);
        $today = new DateTime();
        $interval = $borrowDate->diff($today);
        $daysBorrowed = $interval->days;

        /* check if overdue */
        if ($daysBorrowed > 14) {
            $overdueDays = $daysBorrowed - 14;
            $fineAmount = $overdueDays * 0.50; /* 50P per day */

            $fines_data[] = [
                'name' => $b['name'],
                'amount' => $fineAmount
            ];
        }
    }
} catch (PDOException $e) { 
    $error = "Data error."; 
}
?>
<!DOCTYPE html>
<html>
<head>

    <title>Current Fines</title>

</head>
<body>

    <h1>Member Fines</h1>
    <nav>
        <a href="home.php">Home</a> | <a href="edit_book.php">Edit Books</a> | <a href="view_fines.php">View Fines</a> </nav>
    <hr>
    <table> <tr>
            <th>Name</th>
            <th>Amount</th>
        </tr>
        <?php if (empty($fines_data)): ?>
            <tr><td colspan="2">No current fines</td></tr> <!-- Display if no fines -->
        <?php else: ?>
            <?php foreach ($fines_data as $f): ?>
                <tr>
                    <td><?php echo htmlspecialchars($f['name']); ?></td>
                    <td>£<?php echo number_format($f['amount'], 2); ?></td> </tr> <!-- Display values from database -->
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

</body>
</html>
<?php
/* Config */
$host = "localhost"; 
$dbname = ""; 
$username = "root"; 
$password = "";
$message = "";

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);  /* Connect */

    $userCount = $pdo->query("SELECT COUNT(*) FROM users WHERE role = 'user'")->fetchColumn();/* Number of users */
    $adminCount = $pdo->query("SELECT COUNT(*) FROM users WHERE role = 'admin'")->fetchColumn();/* Number of admins */
    $currentBookings = $pdo->query("SELECT COUNT(*) FROM bookings WHERE return_status = 'borrowed'")->fetchColumn(); /* Number of books taken out currently */
    $totalBookings = $pdo->query("SELECT COUNT(*) FROM bookings")->fetchColumn(); /* Number of bookings total */
    
    $overdueCount = 0;
    $stmt = $pdo->query("SELECT borrow_date FROM bookings WHERE return_status = 'borrowed'"); /* Number of books overdue */
    $activeBookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($activeBookings as $b) {
        $borrowDate = new DateTime($b['borrow_date']);
        $today = new DateTime();
        $interval = $borrowDate->diff($today);/* Check for overdue */
        if ($interval->days > 14) {
            $overdueCount++;
        }
    }

} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>System stats</title>
</head>
<body>
    <h1>Bookhub Statistics</h1> <!-- Table to display stats --> 
    <nav>
        <a href="home.php">Home</a> | <a href="edit_book.php">Edit Books</a> | <a href="view_fines.php">View Fines</a> | <a href="system_stats.php">System Stats</a> </nav>
    <hr>

    <p><?php echo $message; ?></p>

    <table>
        <tr>
            <th>Category</th>
            <th>Count</th>
        </tr>
        <tr>
            <td>Number of Users</td>
            <td><?php echo $userCount; ?></td> 
        </tr>
        <tr>
            <td>Number of Admins</td>
            <td><?php echo $adminCount; ?></td> <
            /tr>
        <tr>
            <td>Active Bookings</td>
            <td><?php echo $currentBookings; ?></td> 
        </tr>
        <tr>
            <td>Total Bookings</td>
            <td><?php echo $totalBookings; ?></td> 
        </tr>
        <tr>
            <td>Total Overdue Books</td>
            <td><?php echo $overdueCount; ?></td> 
        </tr>

    </table>
</body>
</html>
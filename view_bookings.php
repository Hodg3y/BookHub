<?php include 'header.php'; include 'db_connect.php'; ?>

<main style="padding: 20px;">
    <h2>Current Library Bookings</h2>
    <table style="width: 100%; border-collapse: collapse; background: white;">
        <thead>
            <tr style="background-color: #a0ac90; color: white;">
                <th style="padding: 10px;">ID</th>
                <th style="padding: 10px;">User</th>
                <th style="padding: 10px;">Book Title</th>
                <th style="padding: 10px;">Due In</th>
                <th style="padding: 10px;">Returned</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT b.BookingID, a.FirstName, a.LastName, d.Title, b.TimeDueIn, b.Returned 
                    FROM Booking b
                    JOIN Account a ON b.UserID = a.UserID
                    JOIN Inventory i ON b.BookID = i.BookID
                    JOIN BookDescribed d ON i.ISBN = d.ISBN";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr style='border-bottom: 1px solid #ddd;'>
                            <td style='padding: 10px; text-align: center;'>".$row['BookingID']."</td>
                            <td style='padding: 10px;'>".$row['FirstName']." ".$row['LastName']."</td>
                            <td style='padding: 10px;'>".$row['Title']."</td>
                            <td style='padding: 10px; text-align: center;'>".$row['TimeDueIn']."</td>
                            <td style='padding: 10px; text-align: center;'>".($row['Returned'] ? 'Yes' : 'No')."</td>
                          </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</main>
</body></html>
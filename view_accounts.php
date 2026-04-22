<?php include 'header.php'; include 'db_connect.php'; ?>

<main style="padding: 20px;">
    <h2>Manage User Accounts</h2>
    <table style="width: 100%; border-collapse: collapse; background: white;">
        <thead>
            <tr style="background-color: #a0ac90; color: white;">
                <th style="padding: 10px;">ID</th>
                <th style="padding: 10px;">Name</th>
                <th style="padding: 10px;">Email</th>
                <th style="padding: 10px;">Role</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT UserID, FirstName, LastName, Email, Role FROM Account";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr style='border-bottom: 1px solid #ddd;'>
                            <td style='padding: 10px; text-align: center;'>".$row['UserID']."</td>
                            <td style='padding: 10px;'>".$row['FirstName']." ".$row['LastName']."</td>
                            <td style='padding: 10px;'>".$row['Email']."</td>
                            <td style='padding: 10px; text-align: center;'>".$row['Role']."</td>
                          </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</main>
</body></html>
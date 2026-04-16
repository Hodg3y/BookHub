<?php include 'header.php'; ?>

<main style="padding: 20px;">
    <h2>Admin Dashboard</h2>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; max-width: 500px;">
        <a href="view_bookings.php" style="text-decoration: none; background-color: white; border: 2px solid #a0ac90; color: #4a4a4a; padding: 20px; text-align: center; border-radius: 8px;">
            <i class="fa-solid fa-calendar-check" style="font-size: 24px; color: #a0ac90;"></i><br><br>
            View All Bookings
        </a>
        <a href="view_accounts.php" style="text-decoration: none; background-color: white; border: 2px solid #a0ac90; color: #4a4a4a; padding: 20px; text-align: center; border-radius: 8px;">
            <i class="fa-solid fa-users-gear" style="font-size: 24px; color: #a0ac90;"></i><br><br>
            Edit User Accounts
        </a>
    </div>
</main>
</body>
</html>
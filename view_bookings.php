<?php include 'header.php'; ?>

<main style="padding: 20px;">
    <h2>Library Bookings</h2>
    <div style="margin-bottom: 20px;">
        <input type="text" placeholder="Filter by user or date..." style="padding: 8px; width: 250px; border: 1px solid #a0ac90;">
        <button style="background-color: #a0ac90; color: white; border: none; padding: 8px 15px; cursor: pointer;">Apply Filter</button>
    </div>

    <table border="0" style="width: 100%; border-collapse: collapse; background-color: white; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <thead>
            <tr style="background-color: #a0ac90; color: #ede6df;">
                <th style="padding: 12px; text-align: left;">ID</th>
                <th style="padding: 12px; text-align: left;">Book Title</th>
                <th style="padding: 12px; text-align: left;">Reserved By</th>
                <th style="padding: 12px; text-align: left;">Return Date</th>
            </tr>
        </thead>
        <tbody>
            <tr><td colspan="4" style="padding: 20px; text-align: center;">No active bookings to display.</td></tr>
        </tbody>
    </table>
</main>
</body>
</html>
<?php 
/* view_accounts.php 
This page allows staff to view and manage user accounts. 
It uses the universal header and includes search/filter functionality.
*/
include 'header.php'; 
?>

<main style="padding: 20px; max-width: 1200px; margin: auto;">
    <section style="background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        <h2 style="color: #4a4a4a; border-bottom: 2px solid #a0ac90; padding-bottom: 10px;">User Account Management</h2>
        
        <div style="margin-bottom: 30px; display: flex; gap: 10px; flex-wrap: wrap; align-items: center;">
            <form action="view_accounts.php" method="GET" style="display: flex; gap: 10px; width: 100%;">
                <input type="text" name="search" placeholder="Search by name, email, or ID..." 
                       style="padding: 10px; flex-grow: 1; border: 1px solid #ccc; border-radius: 4px;"
                       value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                
                <select name="role_filter" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                    <option value="">All Roles</option>
                    <option value="student">Student</option>
                    <option value="staff">Staff</option>
                    <option value="admin">Admin</option>
                </select>

                <button type="submit" style="background-color: #a0ac90; color: #ede6df; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; font-weight: bold;">
                    <i class="fa-solid fa-magnifying-glass"></i> Filter
                </button>
            </form>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; min-width: 600px;">
                <thead>
                    <tr style="background-color: #a0ac90; color: #ede6df;">
                        <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">User ID</th>
                        <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Full Name</th>
                        <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Email Address</th>
                        <th style="padding: 12px; text-align: left; border-bottom: 1px solid #ddd;">Role</th>
                        <th style="padding: 12px; text-align: center; border-bottom: 1px solid #ddd;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    /* Placeholder for PHP Database Logic:
                    1. Connect to your database using mysqli or PDO.
                    2. Fetch users based on the search/filter parameters.
                    3. Loop through the results to populate the table rows.
                    */
                    
                    // Example static row for visualization
                    ?>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 12px;">1001</td>
                        <td style="padding: 12px;">Alex Hodgkins</td>
                        <td style="padding: 12px;">Alex.J.Hodgkins@student.shu.ac.uk</td>
                        <td style="padding: 12px;"><span style="background: #e0f0e0; padding: 4px 8px; border-radius: 12px; font-size: 0.85em;">Student</span></td>
                        <td style="padding: 12px; text-align: center;">
                            <a href="edit_user.php?id=1001" style="color: #a0ac90; margin-right: 10px;" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="delete_user.php?id=1001" style="color: #d9534f;" title="Delete" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    
                    <?php if (!isset($results)): ?>
                    <tr>
                        <td colspan="5" style="padding: 40px; text-align: center; color: #777;">
                            <i class="fa-solid fa-users" style="font-size: 48px; color: #ddd; display: block; margin-bottom: 10px;"></i>
                            Use the search bar above to manage accounts.
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>

<footer style="margin-top: 40px; text-align: center; color: #a0ac90; padding: 20px;">
    <p>&copy; <?php echo date("Y"); ?> BookHub Library System</p>
</footer>

</body>
</html>
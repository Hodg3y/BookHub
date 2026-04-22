<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://kit.fontawesome.com/76dd712398.js" crossorigin="anonymous"></script>
    <style>
        body { margin: 0; background-color: #ede6df; font-family: sans-serif; }
        header {
            background-color: #a0ac90;
            padding: 15px 0;
            height: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .HeaderTitle {
            color: #ede6df;
            font-size: 24px;
            text-decoration: underline;
        }
        .HeaderTitle a { color: inherit; text-decoration: none; }
        .options {
            padding-right: 20px;
            font-size: 25px;
            display: flex;
            gap: 20px;
        }
        .options a { color: #ede6df; text-decoration: none; }
        .options i:hover, .HeaderTitle:hover { color: #d1c0ae; cursor: pointer; }
    </style>
</head>
<body>
    <header>
        <div style="width: 80px;"></div> 
        <div class="HeaderTitle"><a href="Home Page.php">BookHub</a></div>
        <div class="options">
            <a href="search_books.php" title="Search"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="admin_dashboard.php" title="Admin Dashboard"><i class="fa-solid fa-list"></i></a>
            <a href="view_accounts.php" title="Manage Accounts"><i class="fa-regular fa-circle-user"></i></a>
        </div>
    </header>
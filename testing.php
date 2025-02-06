
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Library Management System</title>
    <style>
        td{
            color:white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Library Management System - Searching</h1>
        <h2><mark>Search Book By Bookid</mark></h2>
        <form action="bookback.php" method="POST">
            <label>Book id:</label><br>
            <input type="text" name="bookid" required><br>
            <input type="submit" value="Search" name="search_book">
        </form>
    </div>
</body>
</html>
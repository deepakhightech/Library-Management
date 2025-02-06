
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Library Management System</title>
    <style>
        th{
            color:red; font-size:20px;
        }
        td{ color:black; text-align:center; font-size:18px}
    </style>
</head>
<body>
    <div class="container">
        <h1>Library Management System - Searching</h1>
        <h2><mark>Search Student By Id</mark></h2>
        <form action="searchstdback.php" method="POST">
            <label>Student Id:</label><br>
            <input type="text" name="studentid" required><br>
            <input type="submit" value="Search" name="search_student">
        </form>
    </div>
</body>
</html>


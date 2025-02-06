
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
        <form action="#" method="POST">
            <label>Book id:</label><br>
            <input type="text" name="bookid" required><br>
            <input type="submit" value="Search" name="search_student">
        </form>
    </div>
</body>
</html>

<?php
include("dbcon.php");
error_reporting(0);

if($_POST['search_student']){
    $book_id = $_POST['bookid'];
    $query = "SELECT * FROM issuebook where Bk_id= '$book_id'";
    $data = mysqli_query($connection,$query);

    $total = mysqli_num_rows($data);

if($total!=0)
{
    
    ?>
    <table border="1" cellspacing="7" width="60%" align="center">
        <tr>
        <th width="20%">Student Id</th>
        <th width="30%">Book id</th>
        <th width="20%">Issue date</th>
        </tr>
    

    <?php
    while($res_arr = mysqli_fetch_assoc($data))
    {
        echo "<tr>
             <td>".$res_arr['Student_id']."</td>
             <td>".$res_arr['Bk_id']."</td>
             <td>".$res_arr['Issue_date']."</td>
            </tr>";
    }
}    

else
{
    echo '<script>alert("Book not assigned any student means book available in your library")</script>';
}
}
?>
</table>


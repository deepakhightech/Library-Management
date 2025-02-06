<?php include("dbcon.php");
    error_reporting(0)?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Library Management System</title>
</head>
<body>
    <div class="container">
        <h1>Library Management System</h1>
        <h2><mark>Add New Book</mark></h2>
        <form action="#" method="POST">
            <label>Book ID:</label><br>
            <input type="text" name="bookId" required><br>
            <label>Book Name:</label><br>
            <select name="bookname" required>
                <option value="C programming">__Select__</option>
                <option value="Data structure">Data structure</option>
                <option value="Computer Fundamental">Computer Fundamental</option>
                <option value="Java Programming">Java Programming</option>
                <option value="Computer Architecture">Computer Architecture</option>
                <option value="Computer Architecture">Business Communication</option>
                <option value="DBMS">DBMS</option>
            </select><br>
            <label>Author:</label><br>
            <select name="bookauthor" required>
                <option value="C programming">__Select__</option>
                <option value="Data structure">Mr Deepak Jain</option>
                <option value="Data structure">Mr Deepak Jain</option>
                <option value="Data structure">Mr Deepak Jain</option>
            </select><br>
            <label>Book Price:</label><br>
            <input type="text" name="price" required><br>
            <input type="submit" value="Add Book" name="addbook">
        </form>
    </div>
</body>
</html>

<?php
// $connection = mysqli_connect("localhost","root","","adminres") or die(mysql_error());
include("dbcon.php");
error_reporting(0);

if($_POST['addbook']){
$book_id = $_POST['bookId'];
$book_name = $_POST['bookname'];
$book_author = $_POST['bookauthor'];
$book_price = $_POST['price'];

$sql = "INSERT INTO addbook(Book_id,Book_name,Author,Book_price,available) VALUES ('$book_id','$book_name','$book_author','$book_price','YES')";
}
$result = mysqli_query($connection,$sql); 
if($result)
{
    echo '<script>alert("Book added successfully..")</script>';
    //window.location.href="bookdetails.php";
      header('location:bookdetails.php');
}else
{
    echo "book not inserted into the database.";
}
?>

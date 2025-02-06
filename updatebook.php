<?php include("dbcon.php");
    error_reporting(0);
$bk_id = $_GET['book_id'];

$query = "SELECT * FROM addbook where Book_id='$bk_id'";
$data = mysqli_query($connection,$query);

$total = mysqli_num_rows($data);
$res_arr = mysqli_fetch_assoc($data);
?>
    
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
        <h2><mark>Update book details</mark></h2>
        <form action="#" method="POST">
            <label>Book ID:</label><br>
            <input type="text" value="<?php echo $res_arr['Book_id']?>" name="bookId" required><br>
            <label>Book Name:</label><br>
            <select  name="bookname" required>
                <option value="C programming">__Select__</option require>
                <option value="Data structure">Data structure</option>
                <option value="Computer Fundamental">Computer Fundamental</option>
                <option value="Java Programming">Java Programming</option>
                <option value="Computer Architecture">Computer Architecture</option>
                <option value="Computer Architecture">Business Communication</option>
                <option value="DBMS">BBMS</option>
            </select><br>
            <label>Author:</label><br>
            <select name="bookauthor" required>
                <option>__Select__</option>
                <option value="Data structure">Data structure</option>
            </select><br>
            <label>Book Price:</label><br>
            <input type="text" value="<?php echo $res_arr['Book_price']?>" name="price" required><br>
            <input type="submit" value="Add Book" name="updt_details">
        </form>
    </div>
</body>
</html>

<?php
// $connection = mysqli_connect("localhost","root","","adminres") or die(mysql_error());

if($_POST['updt_details']){
$book_id = $_POST['bookId'];
$book_name = $_POST['bookname'];
$author = $_POST['bookauthor'];
$price = $_POST['price'];

$sql_query = "UPDATE addbook SET Book_id=$book_id,Book_name='$book_name',Author='$author',Book_price='$price' where Book_id=$bk_id";

$result = mysqli_query($connection,$sql_query); 

if($result)
{
    ?>

    <script type="text/javascript">
        alert('Updation book successfully');
        window.location.href="bookdetails.php";
    </script>
    <?php
}
else
{
    echo "Book not updated.";
}

}
?>

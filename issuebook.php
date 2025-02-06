
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
        <h2><mark>Issue Book by Admin</mark></h2>
        <form action="#" method="POST">
            <label>Student Id:</label><br>
            <input type="text" name="studentid" required><br>
            <label>Book Id:</label><br>
            <input type="text" name="bookid" required><br>
            <input type="submit" value="Issue Book" name="issuebook">
        </form>
    </div>
</body>
</html>

<?php

include("dbcon.php");
error_reporting(0);
// $connection = mysqli_connect("localhost","root","","adminres") or die(mysql_error());

if($_POST['issuebook']){
$student_id = $_POST['studentid'];
$book_id = $_POST['bookid'];
$issue_date = date("d/m/Y");


$avlbookquery= "SELECT Book_id,Available FROM addbook WHERE Book_id='$book_id' AND Available = 'YES'";
$avlresult= mysqli_query($connection,$avlbookquery);

$total= mysqli_num_rows($avlresult);
echo $total;
if($total){
    $stdfoundquery= "SELECT Id FROM stdaccount WHERE Id='$student_id'";
    $foudresult= mysqli_query($connection,$stdfoundquery);
    $foundrow= mysqli_num_rows($foudresult);
    if($foundrow)
    {

        $issuebookquery = "INSERT INTO issuebook(Student_id,Bk_id,Issue_date) VALUES ('$student_id','$book_id','$issue_date')";
        $issueresult = mysqli_query($connection,$issuebookquery); 
        if($issueresult)
        {
            ?>
            <script type="text/javascript">
                alert('Book asigned is successfull.');
                //window.location.href="loginform.php";
            </script>
            <?php
            $updateAvailabilityQuery = "UPDATE addbook SET Available = 'NO' WHERE Book_id = $book_id";
            mysqli_query($connection,$updateAvailabilityQuery); 
            //  header('location:loginform.php');
        }
        else{
            echo "book not assign due t some error...";
        }
    }
    else{
        echo '<script>alert("student not found for this ID....")</script>';
    }
}
else{
    echo '<script>alert("Book not available.....")</script>';
}
}
?>



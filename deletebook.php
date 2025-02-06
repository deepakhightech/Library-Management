<?php
include("dbcon.php");
error_reporting(0);
$bk_id = $_GET['book_id'];

$query="DELETE FROM addbook where Book_id='$bk_id'";
$data = mysqli_query($connection,$query);
if($data){
    echo '<script>alert("Record was deleted successfully")</script>';
    ?>
    <script>window.location.href="bookdetails.php";</script>
    <?php
}
else{
    echo "record was not deleted";
}
?>
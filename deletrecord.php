<?php
include("dbcon.php");
error_reporting(0);
$id = $_GET['id'];

$query="DELETE FROM stdaccount where Id='$id'";
$data = mysqli_query($connection,$query);
if($data){
    echo '<script>alert("Record was deleted successfully")</script>';
    ?>
    <script>window.location.href="student_record.php";</script>
    <?php
}
else{
    echo "record was not deleted";
}
?>
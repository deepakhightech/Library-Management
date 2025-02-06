<?php include("dbcon.php");
    error_reporting(0);
$id = $_GET['id'];
echo $id;

$query = "SELECT * FROM stdaccount where Id='$id'";
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
        <h2><mark>Update Student details</mark></h2>
        <form action="#" method="POST">
            <label>Student ID:</label><br>
            <input type="text" value="<?php echo $res_arr['Id']?>" name="studentid" required><br>
            <label>Student Name:</label><br>
            <input type="text" value="<?php echo $res_arr['Student_name']?>" name="studentname" required><br>
            <label>Mobile:</label><br>
            <input type="text" value="<?php echo $res_arr['Mobile']?>" name="mobile" required><br>
            <label>Email:</label><br>
            <input type="text" value="<?php echo $res_arr['Email']?>" name="email" required><br>

            <input type="submit" value="Update Details" name="updt_details">
        </form>
    </div>
</body>
</html>

<?php
// $connection = mysqli_connect("localhost","root","","adminres") or die(mysql_error());

if($_POST['updt_details']){
$std_id = $_POST['studentid'];
$std_name = $_POST['studentname'];
$std_mobile = $_POST['mobile'];
$std_email = $_POST['email'];

$sql_query = "UPDATE stdaccount SET Id=$std_id,Student_name='$std_name',Mobile='$std_mobile',Email='$std_email' where Id=$id";

$result = mysqli_query($connection,$sql_query); 

if($result)
{
    ?>

    <script type="text/javascript">
        alert('Student record updated successfully.');
        window.location.href="student_record.php";
    </script>
    <?php
}
else
{
    echo "Account not updated.";
}

}
?>

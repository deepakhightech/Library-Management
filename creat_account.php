<?php include("dbcon.php");
    error_reporting(0)?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="formvalid.js"></script> 
    <title>Library Management System</title>
</head>
<body>
    <div class="container">
        <h1>Library Management System</h1>
        <h2><mark>Creat New Student Acount</mark></h2>
        <form action="#" method="POST" onsubmit="return formvalidation()">
            <label>Student ID:</label><br>
            <input type="text" name="studentid" required><br>
            <label>Student Name:</label><br>
            <input type="text" name="studentname" required><br>
            <label>Mobile:</label><br>
            <input type="text" name="mobile" id="mobile" required><br>
            <label>Email:</label><br>
            <input type="text" name="email" id="email" required><br>

            <input type="submit" value="Creat Acount" name="creat">
        </form>
    </div>
</body>
</html>

<?php
// $connection = mysqli_connect("localhost","root","","adminres") or die(mysql_error());

if($_POST['creat']){
$std_id = $_POST['studentid'];
$std_name = $_POST['studentname'];
$std_mobile = $_POST['mobile'];
$std_email = $_POST['email'];

$foundstdquery= "SELECT Id FROM stdaccount WHERE Id='$std_id'";
$foundstudent= mysqli_query($connection,$foundstdquery);
$foundrow= mysqli_num_rows($foundstudent);
if(!($foundrow))
{
    $sql = "INSERT INTO stdaccount(Id,Student_name,Mobile,Email) VALUES ('$std_id','$std_name','$std_mobile','$std_email')";

    $result = mysqli_query($connection,$sql); 
    if($result)
    {
        ?>
        <script type="text/javascript">
            alert('Student account created successfully.');
            //window.location.href="loginform.php";

        </script>
        <?php
        //  header('location:loginform.php');
    }
    else
    {
        echo '<script>alert("Account not created please try again.")</script>';
    }
}
else
{
    echo '<script>alert("please choose another STUDENT ID")</script>';
}
}
?>


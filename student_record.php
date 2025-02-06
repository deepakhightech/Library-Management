<?php
session_start();
// echo "display page ".$_SESSION['user_name'];
?>


<html>
    <head>
        <title>book details</title>
        <link rel="stylesheet" href="style2.css">
    </head>
</html>

<?php 
include("dbcon.php");
error_reporting(0);

// $display_data = $_SESSION['user_name'];
// if($display_data)
// {

// }
// else
// {
//     header('location:newlogin.php');
// }

$query = "SELECT * FROM stdaccount";
$data = mysqli_query($connection,$query);
$total = mysqli_num_rows($data);

// $res_arr = mysqli_fetch_assoc($data); 

// echo $res_arr['Username']."  ".$res_arr['Mobile']."  ".$res_arr['Email']."  ".$res_arr['Password'];

if($total!=0)
{
    // echo "table";
    ?>
    <h1 align="center"><mark>Student Account details</mark></h1>
    <table border="1" cellspacing="7" width="80%" align="center">
        <tr>
        <th width="5%">Id</th>
        <th width="20%">Student name</th>
        <th width="10%">Mobile</th>
        <th width="20%">Email</th>
        <!-- <th width="20%">Book Id</th> -->
        <th width="20%">Update</th>
        </tr>
    

    <?php
    while($res_arr = mysqli_fetch_assoc($data))
    {
        echo "<tr>
             <td>".$res_arr['Id']."</td>
             <td>".$res_arr['Student_name']."</td>
             <td>".$res_arr['Mobile']."</td>
             <td>".$res_arr['Email']."</td>
             <td><a href='update.php?id=$res_arr[Id]'><input type='submit' value='Update' class='updtbtn'></a>

             <a href='deletrecord.php?id=$res_arr[Id]'><input type='submit' value='delete' class='dltbtn' onclick='return confirmation()'></a>
             </td>
            </tr>";
    }
}
else
{
    echo "No record found ";
}
?>
</table>

<script>
    function confirmation(){
        return confirm('Are you want to delete this record');
    }
</script>


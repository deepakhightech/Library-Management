

<html>
    <head>
        <title>book details</title>
        <link rel="stylesheet" href="style2.css">

        <table border ="1" align="center"width="80%">
            <h1 align="center">All information related to student</h1>
    <tr>
        <th width="5%">student id</th>
        <th width="15%">student name</th>
        <th width="5%">book id</th>
        <th width="10%">date</th>
        <th width="10%">mobile</th>
        <th width="15%">email</th>
        <th width="15%">book name</th>
        <th width="15%">author</th>
    </tr>
    </head>
</html>



<?php
    include('dbcon.php');
    error_reporting(0);

    $query="SELECT * FROM issuebook isb Inner join stdaccount stdac on isb.Student_id=stdac.Id Inner join addbook adbk on isb.Bk_id=adbk.Book_id";
    $res=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($res))
    {
        ?>
        <tr>
            <td><?php echo $row['Id'] ?></td>
            <td><?php echo $row['Student_name']?></td>
            <td><?php echo $row['Bk_id']?></td>
            <td><?php echo $row['Issue_date']?></td>
            <td><?php echo $row['Mobile']?></td>
            <td><?php echo $row['Email']?></td>
            <td><?php echo $row['Book_name']?></td>
            <td><?php echo $row['Author']?></td>
            
        </tr>
        <?php
    }
?>
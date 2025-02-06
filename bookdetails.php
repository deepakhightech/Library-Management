

<html>
    <head>
        <title>book details</title>
        <link rel="stylesheet" href="style2.css">
    </head>
</html>

<?php
    include("dbcon.php");
    error_reporting(0);
    $query = "SELECT * FROM addbook";
    $data = mysqli_query($connection,$query);
    $total = mysqli_num_rows($data);
    if($total!=0){
        ?>
        <h1 align="center"><mark>Book Details In Library</mark></h1>
        <table border="1" cellspacing="7" width="75%" align="center">
            <tr>
            <th width="10%">Book Id</th>
            <th width="20%">Book name</th>
            <th width="15%">Author</th>
            <th width="10%">Book price</th>
            <th width="10%">Available</th>
            <!-- <th width="20%">Book Id</th> -->
            <th width="20%">Update</th> 
            </tr>
        
    
        <?php
    while($res_arr = mysqli_fetch_assoc($data))
    {
        echo "<tr>
        <td>".$res_arr['Book_id']."</td>
        <td>".$res_arr['Book_name']."</td>
        <td>".$res_arr['Author']."</td>
        <td>".$res_arr['Book_price']."</td>
        <td>".$res_arr['available']."</td>
        <td><a href='updatebook.php?book_id=$res_arr[Book_id]'><input type='submit' value='Update' class='updtbtn'></a>

        <a href='deletebook.php?book_id=$res_arr[Book_id]'><input type='submit' value='delete' class='dltbtn' onclick='return confirmation()'></a>
        </td>
       </tr>";
    }
    }
    else{
        echo "books are not available in the database";
    }
?>
</table>

<script>
    function confirmation(){
        return confirm('Are you want to delete this book details');
    }
</script>
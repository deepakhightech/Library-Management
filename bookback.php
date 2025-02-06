<?php
    include("dbcon.php");
    error_reporting(0);
    
    if($_POST['search_book']){
        $book_id = $_POST['bookid'];
        $query = "SELECT * FROM issuebook where Bk_id= '$book_id'";
        $data = mysqli_query($connection,$query);
    
        $total = mysqli_num_rows($data);
    
        $name="deepak kuamr";
    if($total !=0)
    {
        while($res_arr = mysqli_fetch_assoc($data))
        {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Student Information</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    background-color: gray;
                }
                .container {
                    background-color: gray;
                    padding: 50px;
                    padding-top:0px;
                    border-radius: 10px;
                    box-shadow: 0 4px 50px rgba(0, 0, 0, 0.1);
                }
                h1 {
                    text-align: center;
                    color: rgb(99, 12, 99);
                }
                .info {
                    margin-top: 20px;
                }
                .info p {
                    margin: 10px 0;
                    font-size: 20px;
                }
            </style>
        </head>
        <body>
            <div class="logo"></div>
            <div class="container">
                <h1>Book Information</h1>
                <div class="info">
                    <p><strong>Student Id:</strong> <?php echo $res_arr['Student_id'] ?></p>
                    <p><strong>Book Id:</strong> <?php echo $res_arr['Bk_id'] ?></p>
                    <p><strong>Issue date:</strong> <?php echo $res_arr['Issue_date'] ?></p>

                </div>
            </div>
        </body>
        </html>

        <?php
    
        }
    }
    else
    {
        echo '<script>alert("user not fount for this id")</script>';
    }
    }
?>

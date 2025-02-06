<?php
    include("dbcon.php");
    error_reporting(0);
    
    if($_POST['search_student']){
        $student_id = $_POST['studentid'];
        $query = "SELECT * FROM stdaccount where Id= '$student_id'";
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
                    background:url('hacker.webp');
                    opacity: 1;


                }
                .container {
                    background-image: url('logo1.png'); /* Image ka URL yahan specify karein */
                    background-size: 30%; /* Image ka size ko 50% karne ke liye */
                    background-position:120px 20px; /* Image ko center me position karne ke liye */
                    background-repeat: no-repeat; 
                    background-color:  rgba(185, 79, 79, 0.264);

                    padding: 50px;
                    padding-top:130px;
                    border-radius: 30px;
                    box-shadow: 0 4px 50px rgba(10, 10, 10, 0.1);
                    
                }
                h2 {
                    text-align: center;
                    color: pink;

                }
                .info {
                    margin-top: 20px;
                }
                .info p {
                    margin: 10px 0;
                    font-size: 18px;
                }
                .logo{
                    background: url("logo1.png");
                    width: 100px;
                    height: 100px;

                }
                .info strong{
                    color:white;
                }
                .info p{
                    color:yellow;
                }                
            </style>
        </head>
        <body>
            <div class="logo"></div>
            <div class="container">
                <h2>Student Information</h2>
                <div class="info">
                    <p><strong>Student Id :</strong> <?php echo $res_arr['Id'] ?></p>
                    <p><strong>Student Name :</strong> <?php echo $res_arr['Student_name'] ?></p>
                    <p><strong>Mobile :</strong> <?php echo $res_arr['Mobile'] ?></p>
                    <p><strong>Email :</strong> <?php echo $res_arr['Email'] ?></p>
                    <p><strong>Book Id :</strong> <?php echo $res_arr['Book_id'] ?></p>
                    <p><strong>Book name :</strong> <?php echo "computer architecture"; ?></p>
                    <p><strong>Author :</strong> <?php echo "Mr. deepak jain"; ?></p>
                    <p><strong>Price :</strong> <?php echo 350; ?></p>
                    

                </div>
            </div>
        </body>
        </html>

        <?php
    
        }
    }
    else
    {
        echo '<script>alert("user not found for this id")</script>';
    }
    }
?>

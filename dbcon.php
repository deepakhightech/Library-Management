<?php
    error_reporting(0);
    $connection = mysqli_connect("localhost","root","","adminres");
    if($connection)
    {
    
    } 
    else
    {
        echo mysqli_connect_error();
    }
 ?>
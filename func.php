<?php
    function total_std(){
        include('dbcon.php');
        $query = "SELECT * FROM stdaccount";
        $data = mysqli_query($connection,$query);
        $total = mysqli_num_rows($data);
        return $total;
    }
    function total_book(){
        include('dbcon.php');
        $query = "SELECT * FROM addbook";
        $data = mysqli_query($connection,$query);
        $total = mysqli_num_rows($data);
        return $total;
    }
    function total_issuebook(){
        include('dbcon.php');
        $query = "SELECT * FROM issuebook";
        $data = mysqli_query($connection,$query);
        $total = mysqli_num_rows($data);
        return $total;
    }
    function total_avalbook(){
        $total_bk=total_book();
        $issue_bk=total_issuebook();
        return ($total_bk-$issue_bk);
    }
echo total_issuebook();
?>

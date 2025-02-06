<?php
  require('func.php');
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
body {
  font-family: "Lato", sans-serif;
  background: url('hacker-1.jpg');
  
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: blue;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #b0c404;
  font-size: 20px;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 24px;
  margin-left: 50px;
  color: white;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
  margin-top:0;
}

.openbtn:hover {
  background-color: #df0da0;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.card{
  margin-left: 300px;
  text-align: center;
  font-size: 20px;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}
h3{
  color: rgb(149, 104, 104);
}
.card1{
  margin-left: 650px;
}
.card4{
  margin-left: 1000px;
  margin-top: -535px;
}
.card5{
  margin-left: 1000px;
  margin-top: 170px;
}
.libtitle{
  margin-left:450px;
  font-size:40px;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  color:pink;
}


</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
  <a href="#">Admin Info</a>
  <a href="creat_account.php">Creat student A/c</a>
  <a href="student_record.php">Show Student A/c</a>
  <a href="addbook.php">Add book</a>
  <a href="#">Manage book</a>
  <a href="issuebook.php">Issue book</a>
  <a href="stdfullinfo.php">Student datails</a>
  <a href="bookdetails.php">Book details</a>
  <a href="search_student.php">Search student</a>
  <a href="search_book.php">Search Book</a>
  <a href="search_book.php">Fine and penality</a>
  <a href="newlogin.php">Logout</a>
</div>
<div id="main">
  <button class="openbtn" onclick="openNav()">=> Open Sidebar</button>  
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">Total Student</h3>
    <p class="card-text">Total number of student =<?php echo total_std();?> </p>
    <a href="student_record.php" class="btn btn-primary">View Student</a>
  </div>
</div>

<div class="card card1" style="width: 18rem; height: 12rem;">
  <div class="card-body">
    <h3 class="card-title">Total Books</h3>
    <p class="card-text">Total number of books in =<?php echo total_book();?></p>
    <a href="bookdetails.php" class="btn btn-primary">View Books</a>
  </div>
</div>
<div class="card card2" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">Available Books</h3>
    <p class="card-text">Total Avl books =<?php echo total_avalbook();?></p>
    <a href="#" class="btn btn-primary">View Books</a>
  </div>
</div>

<div class="card card4" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">Issued Books</h3>
    <p class="card-text">Total no. of issued books =<?php echo total_issuebook();?> </p>
    <a href="stdfullinfo.php" class="btn btn-primary">View issued books</a>
  </div>
</div>

<div class="card card5" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">Report & Analy..</h3>
    <p class="card-text">All about to library info</p>
    <a href="#" class="btn btn-primary">View lib report</a>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 

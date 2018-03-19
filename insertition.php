<?php
  $con=mysqli_connect('localhost','root');
  $a=$_POST['name'];
  $b=$_POST['price'];
  $c=$_POST['author'];
  $q1="create database brm;";
  mysqli_query($con,$q1);
  mysqli_select_db($con,'brm');
  $q2="create table b_record
  (b_id int(7) primary key,
  b_name varchar(50),
  price float(7,2),
  author varchar(50)
  )";
  mysqli_query($con,$q2);
  $q4="alter table b_record modify b_id int(7) auto_increment";
  mysqli_query($con,$q4);
  $q5="alter table b_record auto_increment=1001";
  mysqli_query($con,$q5);
  $q3="insert into b_record (b_name, price, author) values ('$a','$b','$c')";
  mysqli_query($con,$q3);
  $q5="select * from b_record";
  $result=mysqli_query($con,$q5);
  $num=mysqli_num_rows($result);
  mysqli_close($con);
?>

<!doctype html>
<html>
  <head>
    <title>Book_inserted</title>
	<style>
	  h1
	  {
		  text-shadow:5px 5px 5px red;
		  color:Maroon;
		  text-align:center;
		  font-size:50px;
	  }
	  body
	  {
		  background-color:rgba(255,0,255,0.3);
	  }
	  p
	  {
		  font-size:30px;
	  }
	</style>
	<link rel="stylesheet" href="bootstrap.css" />
	<link rel="shortcut icon" href="arvind_logo_pic1.png" type="image/x-icon">
	  <script src="jquery.js"></script>
  <script src="bootstrap.js"></script>
  </head>
  <body>
    <h1 >Book Record Management</h1><hr width="30%" align="center"/>
	<p>Record entered Successfully!!</p>
	<p>Total number of records:<?php echo $num ?></p>
	<p>Go back to Home ?<a href="home.php">Click Here</a></p>
	<p>View Book Record ?<a href="view.php">Click Here</a></p>
	<p>Insert more books ?<a href="insertform.php">Click Here</a></p>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
      </button>
		<a class="navbar-brand" href="index.php" ><i class="material-icons" style="font-size:15.5px">local_library</i> Online-Library</a></div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav"  >
	  <li class="active"><a href="#home" data-toggle="tab"><i class="material-icons" style="font-size:15.5px">home</i>Home</a></li>
	  <li><a href="view.php" >View Books</a></li>
	  <li><a href="insertform.php" >Insert New Books</a></li>
	  <li><a href="updateform.php" >Update Books</a></li>
	  <li><a href="deleteform" >Delete Books</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="#"><i class="material-icons" style="font-size:15.5px">person</i> Log-in</a></li>
      <li><a href="#"><i class="material-icons" style="font-size:15.5px">person_add</i> Sign-up</a></li>
    </ul>
	<form class="navbar-form navbar-right">
	  <div class="input-group">
	    <input type="text" class="form-control" placeholder="search"/>
		<div class="input-group-btn">
		  <button type="submit" class="btn btn-default"><i class="material-icons" style="font-size:15.5px">search</i></button>
		</div>
	  </div>
	</form></div>
	  </div></div>
    </nav>
  </body>
</html>
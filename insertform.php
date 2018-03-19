<?php
  session_start();
  if(!isset($_SESSION['username'])) 
	  header('location:http://localhost/brm/view.php');
?>
<!Doctype html>
<html>
  <head>
    <title>Book_insert_form</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="shortcut icon" href="arvind_logo_pic1.png" type="image/x-icon">
	<link rel="stylesheet" href="bootstrap.css" />
	  <script src="jquery.js"></script>
  <script src="bootstrap.js"></script>
  </head>
  <body>
    <!--form-->
	<div class="container-fluid">
	  <div class="jumbotron"></br>
	    <h1 style="text-align:center;">Online-Library</h1>
	  </div>
	</div>
	<div class="container">
	<form class="form-horizontal" action="insertition.php" method="post">
	<h2 style="text-align:center;color:khaki">Here you can Insert Books</h2><br/><br/><br/>
	  <div class="form-group">
	    <label for="book" class="control-label col-sm-4">Name of Book:</label>
	    <div class="col-sm-4"><input class="form-control" type="text" placeholder="Book_Name" id="book" name="name" required/></div>
	  </div>
	  <div class="form-group">
	    <label for="b_price" class="control-label col-sm-4">Price:</label>
		<div class="col-sm-4">
	    <input class="form-control" type="text" placeholder="Book_Price" id="b_price" name="price" required/></div>
	  </div>
	  <div class="form-group">
	    <label for="b_author" class="control-label col-sm-4">Author:</label>
		<div class="col-sm-4">
	    <input class="form-control" type="text" placeholder="Book_Author_Name" id="b_author" name="author" required/></div>
	  </div>
	<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-2">
        <button type="submit" class="btn btn-success">Insert</button>
      </div>        
      <div class="col-sm-2">
        <button type="reset" class="btn btn-success">Reset</button>
      </div>
    </div>
	</form>
	</div>
	
	<!--Navigation Bar-->
	
	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:lavender;">
	  <div class="container-fluid">
	    <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
      </button>
		<a class="navbar-brand" href="index.php" ><img src="Online-Library.jpg" style="width:30px;height;30px;"/></a></div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav"  >
	  <li><a href="#home" data-toggle="tab"><i class="material-icons" style="font-size:15.5px">home</i>Home</a></li>
	  <li><a href="view.php" >View Books</a></li>
	  <li class="active"><a href="insertform.php" >Insert New Books</a></li>
	  <li><a href="updateform.php" >Update Books</a></li>
	  <li><a href="deleteform" >Delete Books</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="#"><i class="material-icons" style="font-size:15.5px">person</i>Hello, <?php echo $_SESSION['username'];?></a></li>
      <li><a href="#"><i class="material-icons" style="font-size:15.5px">person_add</i>Log-Out</a></li>
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
    </nav><br/><br/>
	<div class="container-fluid">
<div class="jumbotron">
<h4 style="text-align:center;">© 2018 Online-Library | All rights reserved.</h4>
</div></div>
  </body>
</html>
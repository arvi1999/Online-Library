<?php
  session_start();
  if(!isset($_SESSION['username'])) 
	  header('location:http://localhost/brm/view.php');
?>
<?php
  $con=mysqli_connect('localhost','root');
  $q2="use brm";
  mysqli_query($con,$q2);
  $q1="select * from b_record";
  $result=mysqli_query($con,$q1);
  $num=mysqli_num_rows($result);
  mysqli_close($con);
?>

<!doctype html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="shortcut icon" href="arvind_logo_pic1.png" type="image/x-icon">
	<link rel="stylesheet" href="bootstrap.css" />
	  <script src="jquery.js"></script>
  <script src="bootstrap.js"></script>
  </head>
  <body>
    <div class="container-fluid">
	  <div class="jumbotron"></br>
	    <h1 style="text-align:center;">Online-Library</h1>
	  </div>
	</div>
	<h2 style="color:khaki;text-align:center;">Here you can Delete Books</h2>
	<h3 style="color:lightgreen;text-align:center;">Total number of records:<?php echo $num ?></h3><br/><br/>
	<input class="form-control" id="myInput" type="text" placeholder="Here you can Search for Books.."></br>
	<form action="deletion.php" method="post">
    <table class="table table-bordered table-hover table-responsive">
	  <thead><tr bgcolor="lavender">
	    <td>Book_Id</td>
		<td>Name of Book</td>
		<td>Price</td>
		<td>Author</td>
		<td>Select</td>
	  </tr></thead>
	  <tbody id="myTable">
	  <?php
	    for($i=1;$i<=$num;$i++)
		{
			$row=mysqli_fetch_array($result);
			?>
			<tr>
			  <td><?php echo $row['b_id']?></td></td>
			  <td><?php echo $row['b_name']?></td></td>
			  <td><?php echo $row['price']?></td></td>
			  <td><?php echo $row['author']?></td></td>
			  <td><input type="checkbox" value="<?php echo $row['b_id']?>" name="b<?php echo $i?>"/></td>
			</tr>
			<?php
		}
		?>
		</tbody>
		<tbody>
	  <tr>
	    <td colspan="5" ><input class="btn btn-warning" type="submit" value="Delete" /></td>
	  </tr>
	</table></tbody>
	</form>
	<p>Go back to Home <a href="home.php">Click Here</a></p>
	
	<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:lavender;">
	  <div class="container-fluid">
	    <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
      </button>
		<a class="navbar-brand" href="home.php" ><img src="Online-Library.jpg" style="width:30px;height;30px;"/></a></div>
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav"  >
	  <li><a href="home.php"><i class="material-icons" style="font-size:15.5px">home</i>Home</a></li>
	  <li class="active"><a href="userview.php" >View Books</a></li>
	  <li><a href="#" >Gallery</a></li>
	  <li><a href="#" >Videos</a></li>
	  <li><a href="#" >Programs</a></li>
	  <li><a href="#" >About us</a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right">
        <li>
	        <div class="dropdown">
	            <button  class="btn btn-default dropdown-toggle" style="margin-top:8px;margin-right:20px" data-toggle="dropdown">Hello, <?php echo $_SESSION['username']?> <span class="caret"></span></button>
	                <ul class=" dropdown-menu">
		                <li role="presentation"><a href="#"><i class="material-icons" style="font-size:18px">account_circle</i> My Profile</a></li>
						<li role="presentation"><a href="insertform.php"><i class="material-icons" style="font-size:18px">library_add</i> Insert Books</a></li>
						<li role="presentation"><a href="updateform.php"><i class="material-icons" style="font-size:18px">update</i> Update Books</a></li>
						<li role="presentation"><a href="deleteform.php"><i class="material-icons" style="font-size:18px">delete_sweep</i> Delete Books</a></li>
						<li class="divider"></li>
						<li><a href="logout.php"><i class="fa fa-sign-out" style="font-size:18px;color:red;"></i> Log-Out</a></li>
					</ul>
			</div>
		</li>
    </ul>
	<form class="navbar-form navbar-right">
	  <div class="input-group">
	    <input type="text" class="form-control" id="myInput" placeholder="search"/>
		<div class="input-group-btn">
		  <button type="submit" class="btn btn-default"><i class="material-icons" style="font-size:15.5px">search</i></button>
		</div>
	  </div>
	</form></div>
	  </div></div>
    </nav>
	<div class="container-fluid">
<div class="jumbotron">
<h4 style="text-align:center;">© 2018 Online-Library | All rights reserved.</h4>
</div></div>
  </body>
  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>
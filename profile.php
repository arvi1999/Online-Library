<?php
  	session_start();
  	if(!isset($_SESSION['username'])) 
	  	header('location:http://localhost/brm/loginform.php');
	$con=mysqli_connect('localhost','root');
  	$q2="use brm";
  	mysqli_query($con,$q2);
  	$q1="select * from ol_users where email=".$_SESSION['username'];
  	$row =mysqli_fetch_array($con,$result=mysqli_query($con,$q1));
  	$num=mysqli_num_rows($result);
  	mysqli_close($con);
?>

<!doctype html>
<html>
  <head>
    <title>Welcome | Online-Library</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="photos\Online-Library.jpg" type="image/x-icon">
	<link rel="stylesheet" href="bootstrap.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
  </head>
  	<body>
  		<div class="container-fluid"><br/><br/>
    		<div class="jumbotron"><h1 align="center"><img src="photos\Online-Library.jpg" style="width:100px;height;100px;"/> Online-Library</h1></div>
   
        <!--Navigation-Bar--> 
				<div class="container-fluid">
					<nav class="navbar navbar-inverse navbar-fixed-top " style="background-color:lavender;">
	  					<div class="container-fluid">
	    					<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        							<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
      							</button>
	  								<a class="navbar-brand" href="index.php" ><img src="photos\Online-Library.jpg" style="width:30px;height;30px;"/></a></div>
								<div class="collapse navbar-collapse" id="myNavbar">
									<ul class="nav navbar-nav"  >
	  									<li class="active"><a href="index.php"><i class="material-icons" style="font-size:15.5px">home</i>Home</a></li>
	  									<li><a href="view.php" >View Books</a></li>
	  									<li><a href="#" >Gallery</a></li>
	  									<li><a href="#" >Videos</a></li>
	 									<li><a href="#" >Programs</a></li>
	  									<li><a href="#" >About us</a></li>
									</ul>
									<ul class="nav navbar-nav navbar-right">
      									<li><a href="loginform.php"><i class="material-icons" style="font-size:15.5px">person</i> Log-in</a></li>
      									<li><a href="registrationform.php"><i class="material-icons" style="font-size:15.5px">person_add</i> Sign-up</a></li>
    								</ul>
								<form class="navbar-form navbar-right">
	  								<div class="input-group">
	    								<input type="text" class="form-control" placeholder="search"/>
										<div class="input-group-btn">
		  									<button type="submit" class="btn btn-default"><i class="material-icons" style="font-size:15.5px">search</i></button>
										</div>
	  								</div>
								</form>
								</div>
	  						</div>
	  					</div>
    				</nav>
				</div>
			</div>

			<?php
                for($i=1;$i<=$num;$i++)
                {
                    $row=mysqli_fetch_array($result);
                    $a=$row['first_name'];
            ?>
                <tr>
                    <td><?php echo $row['first_name']?></td></td>
                    <td><?php echo $row['user_id']?></td></td>
                    <td><?php echo $row['author']?></td></td>
                    <td><?php echo $row['price']?></td></td>
                </tr>
            <?php
                }
            ?>

			<!--profile-part-->

		<div class="container">
			<h1 style="color:green;text-align:center;">User Details</h1><br/>
			<h3 class="col-sm-offset-2 col-sm-2">Name : </h3><?php echo $a;?>
		</div>
  	</body>
</html>
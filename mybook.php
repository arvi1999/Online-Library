<?php
  session_start();
  if(!isset($_SESSION['username'])) 
	  header('location:http://localhost/brm/loginform.php');
  $con=mysqli_connect('localhost','root');
  $q2="use brm";
  mysqli_query($con,$q2);
  $q1="select * from b_".$_SESSION['username'];
  $result=mysqli_query($con,$q1);
  $num=mysqli_num_rows($result);
  mysqli_close($con);
?>

<!doctype html>
<html>
  	<head>
    	<style>
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="Online-Library.jpg" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="bootstrap.css" />
	  	<script src="jquery.js"></script>
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="bootstrap.js"></script>
  	</head>
  	<body>
        <div class="container-fluid">
        <div class="jumbotron"><br/><br/><h1 align="center"><img src="photos\Online-Library.jpg" style="width:100px;height;100px;"/> Online-Library</h1></div>
        <h3 style="color:lightgreen;text-align:center;">You have Issued total <?php echo $num ?> Book(s) !</h3><br/>
        <input class="form-control" id="myInput" type="text" placeholder="Here you can Search for Books.."></br>
        <table class="table table-bordered table-hover table-responsive">
            <thead><tr style="background-color:lightgray">
                <th>Book_Id</th>
                <th>Book-Name</th>
                <th>Author</th>
                <th>Price</th>
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
                    <td><?php echo $row['author']?></td></td>
                    <td><?php echo $row['price']?></td></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>

        <!-- Navigation-Bar -->
        </div>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:lavender;">
    <div class="container-fluid">
      <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="home.php" ><img src="photos\Online-Library.jpg" style="width:30px;height;30px;"/></a></div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav"  >
    <li><a href="home.php"><i class="material-icons" style="font-size:15.5px">home</i>Home</a></li>
    <li><a href="userview.php" >View Books</a></li>
    <li><a href="#" >Gallery</a></li>
    <li><a href="#" >Videos</a></li>
    <li><a href="#" >Programs</a></li>
    <li><a href="#" >About us</a></li>
  </ul>
  
      <!--Navbar-User-details-->
  <ul class="nav navbar-nav navbar-right">
        <li>
          <div class="dropdown">
              <button  class="btn btn-default dropdown-toggle" style="margin-top:8px;margin-right:20px" data-toggle="dropdown">Hello, <?php echo $_SESSION['username']?> <span class="caret"></span></button>
                  <ul class=" dropdown-menu">
                    <li role="presentation"><a href="#"><i class="material-icons" style="font-size:18px">account_circle</i> My Profile</a></li>
            <li role="presentation"><a href="mybook.php"><i class="material-icons" style="font-size:18px">library_add</i> My Book(s)</a></li>
            <li role="presentation"><a href="issuebook.php"><i class="material-icons" style="font-size:18px">update</i> Issue Book(s)</a></li>
            <li role="presentation"><a href="returnbook.php"><i class="material-icons" style="font-size:18px">delete_sweep</i> Return Book(s)</a></li>
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


    <br/>
<br/>
<h4 style="text-align:center;">© 2018 Online-Library | All rights reserved.</h4>
  	</body>
</html>
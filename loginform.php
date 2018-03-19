<!doctype html>
<html>
  <head>
    <title>Log-in</title>
    <style>
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="photos\Online-Library.jpg" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="bootstrap.css" />
	<script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
  </head>
  <body>

      <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:lavender;">
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
    <li><a href="index.php"><i class="material-icons" style="font-size:15.5px">home</i>Home</a></li>
    <li><a href="view.php" >View Books</a></li>
    <li><a href="#" >Gallery</a></li>
    <li><a href="#" >Videos</a></li>
    <li><a href="#" >Programs</a></li>
    <li><a href="#" >About us</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="loginform.php"><i class="material-icons" style="font-size:15.5px">person</i> Log-in</a></li>
      <li><a href="registrationform.php"><i class="material-icons" style="font-size:15.5px">person_add</i> Sign-up</a></li>
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
  <div class="jumbotron" style="text-align:center">
  <br/><br/><h1>Log-in to Online Library</h1></div>
    <form class="form-horizontal" action="validation.php" method="post">
	  <div class="form-group">
	    <label for="email" class="control-label col-sm-4">E-Mail:</label>
	    <div class="col-sm-4"><input class="form-control" type="text" placeholder="E-Mail Id" id="email" name="email" required/></div><h4 style="padding-left:0px;color:red">@gmail.com</h4>
	  </div>
	  <div class="form-group">
	    <label for="password" class="control-label col-sm-4">Password:</label>
		<div class="col-sm-4">
	    <input class="form-control" type="password" placeholer="Password" id="password" name="password" required/></div>
	  </div>
	  <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-4">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
	<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-2">
        <button type="submit" class="btn btn-success">Log-in</button>
      </div>
	  <div class="col-sm-2">
        <button type="reset" class="btn btn-warning">Reset</button>
      </div>
    </div>
	<div class="form-group">
	<div class="col-sm-offset-4 col-sm-4">
	<h3>Or Create an Account
	<a href="registrationform.php">Sign-up</a></h3>
	</div></div>
	</form>
  </div>


<br/>
<br/>
<h4 style="text-align:center;">© 2018 Online-Library | All rights reserved.</h4>

  
  </body>
</html>
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
	
	<style>
	  .fa {
            padding: 20px;
			font-size: 30px;
			width: 100px;
			text-align: center;
			text-decoration: none;
			margin: 5px 2px;
			border-radius: 100%;
		  }

	  .fa:hover {
					opacity: 0.7;
				}

	  .fa-facebook {
                    background: #3B5998;
					color: white;
				   }

	  .fa-twitter {
					background: #55ACEE;
					color: white;
				  }	
	  .fa-linkedin {
					background: #007bb5;
					color: white;
			       }
      .fa-instagram {
					background: lightgreen;
					color: white;
					}
	</style>
	
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
	</form></div>
	  </div></div>
    </nav>
	</div></div>
	
	<!--slides-->
	<div class="container-fluid">
	<div id="c1" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#c1" data-slide-to="0"></li>
		<li data-target="#c1" data-slide-to="1"></li>
		<li data-target="#c1" data-slide-to="2"></li>
		<li data-target="#c1" data-slide-to="3"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="item active">
		  <img src="photos\library1.jpg" alt="pic_1"/>
		  <div class="carousel-caption">
		    <h3>Welcome to Online-Library</h3>
		  </div>
		</div>
		<div class="item">
		  <img src="photos\library2.jpg" alt="pic_2"/>
		  <div class="carousel-caption">
		    <h3 style="color:red">"Think like a proton & stay positive"</h3>
		  </div>
		</div>
		<div class="item">
		  <img src="photos\library4.jpg" alt="pic_3"/>
		  <div class="carousel-caption">
		    <h3>"Nothing renders me useless like a really Good Book"</h3>
		  </div>
		</div>
		<div class="item">
		  <img src="photos\library3.jpg" alt="pic_1"/>
		  <div class="carousel-caption">
		    <h3>"Making mistakes is better than faking perfections"</h3>
		  </div>
		</div>
	  </div>
	  <a class="left carousel-control" href="#c1" data-slide="prev">
	    <span class="glyphicon glyphicon-chevoron-left"></span>
		<span class="sr-only">previous</span>
	  </a>
	  <a class="right carousel-control" href="#c1" data-slide="next">
	    <span class="glyphicon glyphicon-chevoron-right"></span>
		<span class="sr-only">Next</span>
	  </a>
	</div></div>
	
	<!--Contact-Form-->
	<br/>
	
	<div class="container-fluid">
	  <h3 style="text-align:center">Contact us</h3>
	  <hr width="20%" align="center" />
	  <br/>
	  <form class="form-horizontal" action="contact.php" method="post">
	  <div class="form-group">
	    <label for="name" class="control-label col-sm-4">Name*</label>
	    <div class="col-sm-4"><input class="form-control" type="text" placeholder="Name" id="name" name="name" required/></div>
	  </div>
	  <div class="form-group">
	    <label for="phone" class="control-label col-sm-4">Phone-No*</label>
	    <div class="col-sm-4"><input class="form-control" type="text/number" placeholder="Phone Number" id="phone" name="phone" required/></div>
	  </div>
	  <div class="form-group">
	    <label for="email" class="control-label col-sm-4">E-Mail*</label>
	    <div class="col-sm-4"><input class="form-control" type="text" placeholder="E-Mail Id" id="email" name="email" required/></div><h4 style="padding-left:0px;color:red">@gmail.com</h4>
	  </div>
	  <div class="form-group" >        
      <label for="comment" class="control-label col-sm-4">Comment</label>
	  <div class="col-sm-4">
	  <textarea class="form-control" row="5" type="Comment" placeholer="Comment Here!!" id="comment" name="comment"></textarea></div>
    </div></div>
	<div class="form-group">        
      <div class="col-sm-offset-4 col-sm-2 col-md-1">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>        
      <div class="col-sm-2 col-md-1">
        <button type="reset" class="btn btn-warning">Reset</button>
      </div>
    </div>
	</form>
	
	</div>
	<br/><br/>
	<div class="container-fluid wow fadeInUp delay-02s">
	<h3 style="text-align:center;">Be social with us</h3><hr width="20%" align="center" /><br/>
	  <div class="col-sm-offset-4 col-sm-1 col-xs-6"><a href="https://www.facebook.com/Äŗvïņđ-Saini-1862569494027379" class="fa fa-facebook "></a></div>
	  <div class="col-sm-1 col-xs-6"><a href="https://twitter.com/Arvi_1999" class="fa fa-twitter "></a></div>
	  <div class="col-sm-1 col-xs-6"><a href="https://www.linkedin.com/in/arvind-saini-335556124/" class="fa fa-linkedin "></a></div>
	  <div class="col-sm-1 col-xs-6"><a href="https://www.instagram.com/love_arvind/" class="fa fa-instagram "></a></div>
	</div><br/><br/>
	
	<!-- Google Map -->
	    <div class="container-fluid wow fadeInUp delay-02s">
		<h3 style="text-align:center;">Find us on Google Maps</h3><hr width="30%" align="center"/><br/>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.5489569646165!2d81.60284041466524!3d21.24972718557445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dde213f66723%3A0x21543965c50c43c7!2sNational+Institute+Of+Technology+Raipur!5e0!3m2!1sen!2sin!4v1518869390367" width="100%" height="450" frameborder="1" style="border:0" allowfullscreen></iframe>
		</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<br/>
<br/>
<br/>
<h4 style="text-align:center;">© 2018 Online-Library | All rights reserved.</h4>
  </body>
</html>
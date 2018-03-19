<?php
  $size=sizeof($_POST);
  $j=1;
  for($i=1;$i<=$size;$i++,$j++)
  {
	  $index="b".$j;
	  if(isset($_POST[$index]))
	  {
		  $b_id[$i]=$_POST[$index];
	  }
	  else
		  $i--;
  }
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'brm');
  for($k=1;$k<=$size;$k++)
  {
	  $q="delete from b_record where b_id=".$b_id[$k];
	  mysqli_query($con,$q);
  }
  mysqli_close($con);
?>

<!doctype html>
<html>
  <head>
  <link rel="shortcut icon" href="arvind_logo_pic1.png" type="image/x-icon">
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
	  table
	  {
		  width:50%;
		  font-size:20px;
	  }
	  p
	  {
		  font-size:30px;
	  }
	</style>
	<link rel="stylesheet" href="bootstrap.css" />
	  <script src="jquery.js"></script>
  <script src="bootstrap.js"></script>
  </head>
  <body>
    <h1 >Book Record Management</h1><hr width="30%" align="center"/>
	<p>Records deleted Successfully!!</p>
	<p>Total number of records deleted:<?php echo $size ?></p>
	<p>Go back to Home <a href="home.php">Click Here</a></p>
  </body>
</html>
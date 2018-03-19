<?php
  session_start();
  if(!isset($_SESSION['username'])) 
	  header('location:http://localhost/brm/loginform.php');
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
	  $q="delete from b_".$_SESSION['username']." where b_id=".$b_id[$k];
	  mysqli_query($con,$q);
  }
  mysqli_close($con);
?>

<!doctype html>
<html>
  	<head>
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="Online-Library.jpg" type="image/x-icon">
		<link rel="stylesheet" href="bootstrap.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  	<script src="jquery.js"></script>
    	<script src="bootstrap.js"></script>
  	</head>
  	<body>
 	</body>
</html>

<?php
     header('location:http://localhost/brm/mybook.php'); 
?>

<html>
	<head>
	</head>
	<body>
<?php
  session_start();
  $email=$_POST['email'];
  $password=$_POST['password'];
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'brm');
  $q="select * from ol_users where email='$email' && password='".md5($password)."'";
  $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
?>

<?php
	if($num==0 || $num>1)
	{
?>
	<script>
		alert("Username or Password is Invalid !!");
	</script>
<?php
		header('location:http://localhost/brm/loginform.php');
	}
	else
	{
		$_SESSION['username']=$email;
	  header('location:http://localhost/brm/home.php');
	}
?>
	</body>


</html>
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
  $q2="create table b_".$_SESSION['username']."
  ( 
    b_id int(3),
    b_name varchar(20),
    price float(5,2),
    author varchar(20)
  )";
  mysqli_query($con,$q2);
  for($k=1;$k<=$size;$k++)
  {
	  $q="select * from b_record where b_id=".$b_id[$k];
		$result=mysqli_query($con,$q);
		$row=mysqli_fetch_array($result);
			$a=$row['b_id'];
			$b=$row['b_name'];
			$c=$row['price'];
			$d=$row['author'];
	  $q1="insert into b_".$_SESSION['username']." (b_id, b_name, price, author) values ('$a','$b','$c','$d')";
	  mysqli_query($con,$q1);
  }
  mysqli_close($con);
?>

<html>
  <head>
  </head>
  </body>
  </body>
</html>

<?php
     header('location:http://localhost/brm/mybook.php'); 
?>  
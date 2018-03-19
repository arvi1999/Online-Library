<?php
  session_start();
  $con=mysqli_connect('localhost','root');
  $a=$_POST['name'];
  $b=$_POST['phone'];
  $c=$_POST['email'];
  $d=$_POST['comment'];
  $q1="create database brm;";
  mysqli_query($con,$q1);
  mysqli_select_db($con,'brm');
  $q2="create table contact
  (name varchar(50),
  phone_no varchar(12),
  email varchar(40),
  comment varchar(2048)
  )";
  mysqli_query($con,$q2);
  $q3="insert into contact (name, phone_no, email, comment) values ('$a','$b','$c','$d')";
  mysqli_query($con,$q3);
  if(!isset($_SESSION['username'])) 
    header('location:http://localhost/brm/index.php');
  else
    header('location:http://localhost/brm/home.php');
  mysqli_close($con);
?>
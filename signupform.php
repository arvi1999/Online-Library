<?php
  $con=mysqli_connect('localhost','root');
  $a=$_POST['first_name'];
  $b=$_POST['last_name'];
  $c=$_POST['dob'];
  $d=$_POST['email'];
  $e=$_POST['password'];
  
  $q1="create database brm;";
  mysqli_query($con,$q1);
  mysqli_select_db($con,'brm');
  $q2="create table ol_users
  (user_id int(3) primary key,
  first_name varchar(30),
  last_name varchar(20),
  dob varchar(10),
  email varchar(50) unique,
  password varchar(150)
  )";
  $q4="alter table ol_users modify user_id int(3) auto_increment";
  mysqli_query($con,$q2);
  mysqli_query($con,$q4);
  $encrypt_password=md5($e);
  $q3="insert into ol_users (first_name, last_name, dob, email, password) values ('$a','$b','$c','$d','$encrypt_password')";
  mysqli_query($con,$q3);
  mysqli_close($con);
  header('location:http://localhost/brm/loginform.php');
?>
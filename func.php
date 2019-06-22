<?php
session_start();

$con=mysqli_connect("localhost","root","","cwdb");

if(isset($_POST['f_login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="select * from f_login where email='$email' and password='$password'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1)
{
	$_SESSION['username']=$row['username']; 
	$_SESSION['email']=$row['email'];
	$_SESSION['id']=$row['id']; 
	$_SESSION['department']=$row['department'];
	$_SESSION['mobile']=$row['mobile'];
	header("Location:f_dash.php");

}
else
{
	echo "<script>alert('enter correct details')</script>";
	echo "<script>window.open('facultylogin.html','_self')</script>";
	
}
}
if(isset($_POST['f_signup']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$f_id=$_POST['f_id'];
	$dept=$_POST['dept'];
	$password=$_POST['password'];
	$pass=$_POST['pass'];
	$mobile=$_POST['mobile'];
if($password==$pass)
{
	$query="insert into f_login(username,email,id,department,password,mobile) values('$username','$email','$f_id','$dept','$password','$mobile')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('Signedup Successfully')</script>";
		echo "<script>window.open('facultylogin.html','_self')</script>";
	
	}
	else
	{
		echo "<script>alert('enter all the details')</script>";
		echo "<script>window.open('facultysignup.html','_self')</script>";
	
	}
}
else
{
	echo "<script>alert('enter same password twice')</script>";
		echo "<script>window.open('facultysignup.html','_self')</script>";
	}
}


?>
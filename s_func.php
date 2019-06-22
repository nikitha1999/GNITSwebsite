<?php
session_start();
$con=mysqli_connect("localhost","root","","cwdb");

if(isset($_POST['s_login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="select * from s_details where email='$email' and password='$password'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1)
{
	$_SESSION['s_name']=$row['s_name']; 
	$_SESSION['s_f_name']=$row['s_f_name']; 
	$_SESSION['s_id']=$row['s_id']; 
	$_SESSION['email']=$row['email'];
	$_SESSION['year']=$row['year']; 
	$_SESSION['dept']=$row['dept'];
	$_SESSION['section']=$row['section'];
	$_SESSION['s1']=$row['s1']; 
	$_SESSION['s2']=$row['s2']; 
	$_SESSION['s3']=$row['s3']; 
	$_SESSION['s4']=$row['s4']; 
	$_SESSION['s5']=$row['s5']; 
	header("Location:s_dash.php");
}
else
{
	echo "<script>alert('enter correct details')</script>";
	echo "<script>window.open('s_login.php','_self')</script>";
	
}
}
if(isset($_POST['p_login']))
{
	$s_f_name=$_POST['s_f_name'];
	$password=$_POST['password'];
	$query="select * from s_details where s_f_name='$s_f_name' and password='$password'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1)
{
	$_SESSION['s_name']=$row['s_name']; 
	$_SESSION['s_f_name']=$row['s_f_name']; 
	$_SESSION['s_id']=$row['s_id']; 
	$_SESSION['email']=$row['email'];
	$_SESSION['year']=$row['year']; 
	$_SESSION['dept']=$row['dept'];
	$_SESSION['section']=$row['section'];
	$_SESSION['s1']=$row['s1']; 
	$_SESSION['s2']=$row['s2']; 
	$_SESSION['s3']=$row['s3']; 
	$_SESSION['s4']=$row['s4']; 
	$_SESSION['s5']=$row['s5']; 
	header("Location:p_dash.php");
}
else
{
	echo "<script>alert('enter correct details')</script>";
	echo "<script>window.open('p_login.php','_self')</script>";
	
}
}
?>
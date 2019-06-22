<?php
$con=mysqli_connect("localhost","root","","cwdb");

if(isset($_POST['s_submit']))
{
	$s_name=$_POST['s_name'];
	$s_f_name=$_POST['s_f_name'];
	$s_id=$_POST['s_id'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$dept=$_POST['dept'];
	$year=$_POST['year'];
	$section=$_POST['section'];
	$query="insert into s_details(s_name,s_f_name,s_id,email,password,dept,year,section) values('$s_name','$s_f_name','$s_id','$email','$password','$dept','$year','$section')";
	$result=mysqli_query($con,$query);	
	if($result){
		echo"<script>alert('student details are entered successfully')</script>";
		echo "<script>window.open('register.php','_self')</script>";
	}

	else
	{
		echo "<script>alert('data is not inserted successfully, please try again')</script>";
		echo "<script>window.open('register.php','_self')</script>";
	
	}
}
if(isset($_POST['i_submit']))
{
	$s_id=$_POST['s_id'];
	$s1=$_POST['s1'];
	$s2=$_POST['s2'];
	$s3=$_POST['s3'];
	$s4=$_POST['s4'];
	$s5=$_POST['s5'];
	 $query = "UPDATE s_details
      SET s1=$s1,s2=$s2,s3=$s3,s4=$s4, s5=$s5
      WHERE s_id='$s_id' ";
	$result=mysqli_query($con,$query);	
	if($result){
		echo"<script>alert('student internal marks are entered successfully')</script>";
		echo "<script>window.open('f_inter.php','_self')</script>";
	}

	else
	{
		echo "<script>alert('data is not inserted successfully, please try again')</script>";
		echo "<script>window.open('f_inter.php','_self')</script>";
	
	}
}
?>
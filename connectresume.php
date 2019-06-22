<?php
	$con=mysqli_connect('localhost','root','');
	if(!$con)
	{
	echo 'Server Error';
	}
	if(mysqli_select_db($con,'resumedb'))
	{
	echo 'Data is not stored';
	}
	$fname=$_POST('fname');
	$ename=$_POST('ename');
	$date=$_POST('date');
	$file1=$_POST('file1');
	$sql="insert into resumetb(sno,event,date,file) values('$fname','$ename','$date','$file1')";
	if(!mysqli_query($con,$sql))
	{
	echo 'Not Stored';
	}
	else
	{
	echo 'Stored Successfully';
	}
	header("refreshed:2;url=")
?>
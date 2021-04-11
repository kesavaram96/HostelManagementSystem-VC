<?php
	include('Config.php');
	$conn=makeconnection();
	
	$studentID='';
	$studentName='';
	$indexNo='';
	$userName='';
	$password='';
	$cnfirm_password='';
	$userType='';
	
	if(isset($_POST['studentID']))
	{
		$studentID=$_POST['studentID'];
	}
	
	if(isset($_POST['studentName']))
	{
		$studentName=$_POST['studentName'];
	}
	
	if(isset($_POST['indexNo']))
	{
		$indexNo=$_POST['indexNo'];
	}
	
	if(isset($_POST['userName']))
	{
		$userName=$_POST['userName'];
	}
	
	if(isset($_POST['password']))
	{
		$password=$_POST['password'];
	}
	
	if(isset($_POST['confirmpassword']))
	{
		$confirmpassword=$_POST['confirmpassword'];
	}
	if(isset($_POST['type']))
	{
		$type=$_POST['type'];
	}
	
	if(isset($_POST['Sent'])){
		if($password==$confirmpassword)
		{
			
			$query="INSERT INTO students(studentID,studentName,indexNo,username,password,userType)
			values('$studentID','$studentName','$indexNo','$username','$password','$userType')";
			$result =mysqli_query($conn,$query);
			if($result)
			{
				echo "Success";
			}
			else
			{
				echo "Failed ".mysqli_error($conn);
			}
		}
		else
		{
			echo "Password and Confirm Password is not matched!";
		}
	}
?>
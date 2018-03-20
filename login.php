<?php
	
	
	include_once('config.php');
	include_once('siglo.php');
	session_start();

?>


<?php


	if(isset($_POST['Login']))
	{
		
		//$_SESSION['Username_login'] = $_POST['Username_login'];
		$username = $_POST['Usernamelogin'];
		$password = $_POST['Passwordlogin'];
		
		if(empty($username)||empty($password))
		{
				
			echo "<script> alert('values entered are invalid') </script>";
				
		}
		
		else
		{
			
			
			$query = "select * from user where username='$username' && password='$password'";
			$check = mysqli_query($cn,$query);
			$rows = mysqli_num_rows($check);
			
			if($rows > 0)
			{
				header('page.php');
			}
			else
			{
				
				echo "<script> alert('Password Does not matched') </script>";
				
			}

			
		}
	
	}
	
	
	if(isset($_POST['logout']))
	{
		session_destroy();
		header('siglo.php') ;
	}


?>
<?php

	include_once('config.php');
	

?>

<?php


	if(isset($_POST['SUBMIT']))
	{
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$place = $_POST['place'];
		$comment = $_POST['comment'];
		$image = $_FILES['image'] ['tmp_name'];

		if(empty($name)!== true && empty($email)!== true && empty($place)!== true && empty($comment)!== true)
		{				
			$query = "insert into reviews values('','$name','$email','$place','$comment','$image')";
			$check = mysqli_query($cn,$query);
			
			
		}
		else
		{
			echo "<script>alert('Fill the Entire FORM');</script>";
		}
	}


?>

<html >
<head>
<title>Sign Up Form</title>

<link rel="stylesheet" href="style.css">
</head>

<body background="sources/form_bkg.jpg">
<br>

<ul>
  
  <li style="margin-left:70px"><a href="home.html">HOME</a></li>
  <li><a href="ABOUT.html">ABOUT</a></li>                             
  <li><a href="TOUR.html">TOUR</a></li>
  <li><a href="UPDATES.html">UPDATES</a></li>
  <li><a href="BLOG.html">BLOG</a></li>
  
  <li style="float:right; margin-right:40px;"><a href="form.html">SIGN UP</a></li>
</ul>

<h2 style="color:#FFF; margin-left:300px;">SUCCESSFULL!</h2>
<div style="opacity: 0.5; color: black; align: center; text-align: center; margin-left:30px;">
<a href="home.html"> Return to HOME </a>
</div> 


</body>
</html>

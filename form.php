<!DOCTYPE html >
<html >
<head>
<title>Sign Up Form</title>
<style>
table
{
	background-color:rgba(0,0,0,0.5);
}
table, th, td
{
	
	opacity: 0.5px;
	color:#FFF;
	padding:8px;
}

</style>
<link rel="stylesheet" href="style.css">
</head>

<body background="sources/forgotify-bkg.jpg">
<br>
<ul >
  
  <li style="margin-left:70px"><a href="forgotify.html">Home</a></li>
  <li><a href="music.html">Music</a></li>
  <li><a href="news.html">News</a></li>
  <li><a href="video.html">Video</a></li>
  <li><a href="about.html">About</a></li>
  <li style="float:right; margin-right:40px;"><a class="active" href="form.html">Contact Us</a></li>
</ul>
<h2 style="color:#FFF; margin-left:300px;">Sign Up</h2>
<form action="" method="post">
<table align="center" cellpadding="3px" width="800px " >
    	<tr>
        	<th align="right" valign="top">First Name :</th>
            <td></td>
         <td width="400" align="left"><input placeholder="Enter First Name.." type="text" name="firstname" >
         </td>
    </tr>
        <tr>
        	<th align="right" valign="top">Last Name :</th><td></td>
          <td width="400" align="left"><input placeholder="Enter Last Name.." type="text" name="lastname"></td>
    </tr>
       
        <tr>
        	<th align="right" valign="top">Date Of Birth :</th><td></td>
          <td width="400" align="left"><input type="date" name="dob"></td>
    </tr>
        <tr>
        	<th align="right" valign="top">Gender :</th><td></td>
          <td width="400" align="left"><input type="radio" name="gender" value="male" >Male<input type="radio" name="gender" value="female">Female</td>
    </tr>
        <tr>
        	<th align="right" valign="top">Address :</th><td></td>
          <td width="400" align="left"><textarea placeholder="Enter Address.." name="address" rows="4" cols="21"></textarea></td>
    </tr>
        <tr>
        	<th align="right" valign="top">State :</th><td></td>
            <td width="400" align="left">
            	<select name="state">
                <option value="default">-STATE-</option>
                <option value="assam">Assam</option>
                <option value="chattisgarh">Chattisgarh</option>
                <option value="gujrat">Gujrat</option>
                <option value="karnataka">Karnataka</option>
                <option value="rajasthan">Rajasthan</option>
              </select>
          </td>
    </tr>
        <tr>
        	<th align="right" valign="top">E-mail :</th><td></td>
          <td width="400" align="left"><input placeholder="Enter E-mail.." type="email" name="email" ></td>
    </tr>
        <tr>
        	<th align="right" valign="top">Phone :</th><td></td>
          <td width="400" align="left"><input placeholder="Enter Phone.." type="number" name="phone" ></td>
    </tr>
        <tr>
        	<th align="right" valign="top">Suggestions :</th><td></td>
          <td width="400" align="left"><textarea placeholder="Any Suggestions..." name="suggestions" rows="4" cols="21"></textarea></td>
    </tr>
        <tr>
        	<th align="right" valign="top"></th><td></td>
          <td width="400" align="left"><input type="checkbox"  name="confirm">I agree to the term of use</td>
    </tr>
  </table>
<br>
    <p align="right" style="margin-right:300px">
	<input type="submit" value="SUBMIT" name="submit" style="background:#a8d140; color:#FFF; padding:5px; border-color:#a8d140 ">
    <input type="reset" value="RESET" style="background:#F33; color:#FFF; padding:5px; border-color:#F33">
    </p>
</form>
<?php
if (isset($_POST['confirm']))
	{
		if(isset($_POST['submit']))
			{
				$firstname=$_POST['firstname'];
				$lastname=$_POST['lastname'];
				$dob=$_POST['dob'];
				$gender=$_POST['gender'];
				$address=$_POST['address'];
				$state=$_POST['state'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$suggestions=$_POST['suggestions'];
				
		$query='insert into sign values('$firstname','$lastname','$dob','$geder','$address','$state','$email','$phone','$suggestions')';
		$cn=mysql_db_connect('localhost','root','','mydb9') or die('connection failed');
		$check=mysql_querry_connect('$cn','$querry');
			}
	}
?>
</body>
</html>

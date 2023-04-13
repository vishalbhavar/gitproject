<html>
<head>
<title> Admin login</title>
<link rel="stylesheet" href="FirstHome.css">
<script type="text/javascript">
function preventBack(){window.history.forward();}
setTimeout("preventBack()",0);
window.onunload=function(){null};
</script>
<style>
table{
border:1px solid black;
width:30%;
height:20%;
background:black;
color:red;
opacity:0.7;
}
body{
background:url(im20.jpg);
background-position:center;
background-repeat : no-repeat;
background-size:cover;
}
#footer{
background-color:white;
height:50px;
color:red;
padding:10px;
font-size:16px;
margin-top:430px;
}
p{
margin-top:50px;
}
</style>
</head>
<body>
<div id="main">
      <div id="nav">
           <b><font size="5%">     <u><i><font color="graan" family="times new roman">Rop</font><font color="white" family="times new
	 roman">V</font><font color="green" family="times new roman">atika</font>
     <font color="red" family="times new roman">     Plant Nursery Portal</font></u></i><b></font>
  				<ul>
                       <li><a href="Homepage1.php">Home</a></li>
                       <li><a href="usergallery.php">Gallery</a></li>
                        <li><div class="dropdown">
                        <simple class="dropbtn">Product</simple>
                        <div class="dropdown-content">
                        <a href="userflower.php">Frowers</a>   
                        <a href="userFruits.php">Fruits</a>
                         <a href="usershowplant.php">Show Plants</a>
						 <li><a href="Adminlogin.php">Admin login</a></li>
                         <li><a href="contactus.php">Contact us</a></li>
		<li><a href="feedback.php">Feedback</a></li>
</div></li></ul><br><br><br><br><br><br></b>
<center>
<table>
<tr><td align="center">
<?php
session_start();
include("connection.php");
?>
<form action="" method="POST"  autocomplete="off"><b>
Username*:<br>
<input type="text" name="username" required><br><br>
Password*:<br>
<input type="password" name="password" required><br><br>
<input type="submit" name="submit" value="login">
</form>
<?php
if(isset($_POST['submit']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$query="SELECT * FROM login WHERE user='$user' && pass='$pass'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total>0)
{
$_session['username']=$user;
$_session['password']=$pass;
header('location:Adminpanel.php');
}
else
{
echo"login faild";
}
}
?>
<br><br>
<a href="forgotpassword.php"><font color="red">Forgotpassword</font></a>
</div></div></div>
</td></tr>
</table>
<div id="footer">	
	<center><i><h3>&copyright are reserved to RopVatika Plant Nursery Portal</h3></i></center></footer>
	</div>
</body>
</html>

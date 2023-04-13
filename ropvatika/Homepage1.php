<html>
<head>
<title>Home page</title>
<link rel="stylesheet"href="FirstHome.css">

<style>
body{
	background:url(floimage12.jpg);
	size:cover;
}
table{
	background:red;
	opacity:;
}
.leftside{
margin-left:23%;
font-size:22px;
height:450px;
width:60%;
background-color:fade-black;
font-style:bold;
font-family:sans-serif;
padding:10px;
text-align:center;
color:blue;
margin-bottom:none;
float:center;
margin-top:-2%;
}
img{
border-radius:10%;
height:90%;
width:160%;
}

h1{
margin-top:-1%;
}
h3{
margin-top:-5%;
}

#footer{
background-color:white;
margin-top:10px;
height:70px;
padding:10px;
color:red;
}
p{
margin-top:40px;
}
</style>
</head>
    <body>
	
 <div id="header">
  <div id="logo">
  <img class="im1" src="logo.png">
</div>	   <center>
	<font size="9%"> <h1><u><i><font color="graan" family="times new roman">Rop</font><font color="red" family="times new
	 roman">V</font><font color="graan" family="times new roman">atika</h1></font></font>
     <b><font color="red" family="times new roman" size="5%"> <h3>Plant Nursery Portal</h3></font></u></i></b><b>
	 </center>
    </div>
	  <div id="main">
	<div id="nav">
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
						
</div></li> </ul><br><br><br><br><br><br><br>
           
	<div class="leftside">
	<div style="max-width:50%">
	<?php
$servername="localhost";
$username="root";
$password="Pass@123";
$dbname="ropvatika";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 $sql="select* from home";
 $data=mysqli_query($conn,$sql);
 $result=mysqli_num_rows($data);
 if($result>0)
 {
  while($row=mysqli_fetch_assoc($data))
  {
     $file='/ropvatika/'.$row["file"];
	    ?>
	   <img class="myslides" src="<?php echo $file;?>" width='230px' height='200px'/>
	   
  <?php
  }
}
?>      
	</div>
	</div>
	<script>
	var myIndex=0;
	carouse1();
	function carouse1(){
	var i;
	var x=document.getElementsByClassName("myslides");
	for(i=0;i<x.length;i++){
	x[i].style.display="none";
	}
	myIndex++;
	if(myIndex> x.length){myIndex=1}
	x[myIndex-1].style.display="block";
	setTimeout(carouse1,2000);
	}
	</script>

<div id="footer">	
	<P><i><b><center>&copyright are reserved to RopVatika Plant Nursery Portal</i></center></p></div> </div> </div>
</center></body> </html>



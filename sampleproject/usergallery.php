<html>
<title></title>
<head>
<link rel="stylesheet"href="FirstHome.css">
<style>
#p{
	background:black;
}
body{
	background-color:black;	
}
table{
border:1px solid black;
width:100%;
hight:20%;
}
td{
border:1px solid black;
width:100%;
padding:2px;
}
tr{
border:1px solid black;
width:100%;
padding:2px;
}
th{
border:1px solid black;
width:100%;
padding:2px;
}
#footer{
background-color:white;
height:50px;
color:red;
padding:10px;
font-size:16px;
}
p{
margin-top:30px;
}
img:hovar{
  }
</style>
</head>
<body>

	  <div id="main">

            <div id="nav">
			<b><font size="5%"><u><i><font color="graan" family="times new roman">Rop</font><font color="white" family="times new
	 roman">V</font><font color="green" family="times new roman">atika</font>
     <font color="red" family="times new roman">Plant Nursery Portal</font></u></i><b></font>
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
						  
						 </div> <br><br></b>
                       </div></li> </ul>
       </div>    <center>
<div id="content1">
<?php
$host="localhost";
$user="root";
$pass="";
$dbname="ropvatika";
 $conn=mysqli_connect($host,$user,$pass,$dbname);
 $sql="select* from gallery";
 $data=mysqli_query($conn,$sql);
 $result=mysqli_num_rows($data);
 if($result>0)
 {
  while($row=mysqli_fetch_assoc($data))
  {
       	     $file='/ropvatika/'.$row["file"];
   ?>
	   <img src="<?php echo $file;?>" width='250px' height='200px'/>
	<?php
  }
}
?>       
 </td></tr></table> </div>
  </div>
<div id="footer"><center>
<p> &copyright are reserved to RopVatika Plant Nursery Portal</p>
</div></body>
</html>

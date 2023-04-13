<html>
<head>
    <link rel="stylesheet" href="FirstHome.css">
    <title>feedback</title>
    <style>
	#footer{
background-color:white;
height:50px;
color:red;
padding:10px;
font-size:16px;
margin-top:50%;
}
p{
margin-top:30px;
}


	 #feed{
		 background-color:black;
	 }
        body{
            background:url(feedback.jpg);
            height:100%;
            width:100%; 
		    background-size:cover;
			
        }
        table{
            background-color:black;
            width:30%;
            height:80%;
            margin-top:%;
			margin-right:;
         opacity:0.7;
		 border-color:red;
		 border-radius:5%;
        }
        input{
             background-color:; 
			  
        }
        textarea{
            background-color:;
        }
        h3{
            color:red;
        }
    </style>
    
    </head>
<body>

<div id="main">

            <div id="nav">
			
			<b><font size="5%"><u><i><font color="graan" family="times new roman">Rop</font><font color="white" family="times new
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
						  
						 </div> <br><br><br><br><br><br></b>

   <form action="" method="POST"> 
    <center><table><tr><th>.<br><h3><u>Feedback</u></h3>
    <img src="ip.png" height="15%" width="15%"> <hr>
<font color="white">Enter Your Name:</font><br><input type="text" name="name"required/><br><br><br>
<font color="white">Enter Your E-Mail:</font><br><input type="email" name="email"required/></font><br><br><br>
<font color="white">Text Message:</font><br><textarea rows="5" columns="10" name="message"required/></textarea><br><br>
   
    <input type="submit" name="submit" value="Submit"/><br>.

    </th></tr></table></center></form>
	</div></li> </ul>
       </div> 	
			 </div>
			 <div id="footer">	
	<center><i>&copyright are reserved to RopVatika Plant Nursery Portal</i></center>
	</div>	  
    
</body></html>
<?php
$servername="localhost";
$username="root";
$password="Pass@123";
$dbname="ropvatika";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 if($conn->connect_error)
 {
   die("connection failed".$conn->connect_error);

}
if(isset($_POST['submit']))
{
  $Name=$_POST['name'];
 $Email_id=$_POST['email'];
 $Query=$_POST['message'];
$sql="insert into feedback values('$Name','$Email_id','$Query')";

$data=mysqli_query($conn,$sql);
if($data)
{
  echo "Record inserted";
}
$conn->close();
}
?>

<html>
<title></title>
<head>
<?php
session_start();

?>
<link rel="stylesheet"href="FirstHome.css">
<style>
table{
width:80%;
hight:20%;
color:white;
}
td{
width:100%;
border: 1px solid yellow;
padding:10px;
}
tr{
border: 1px solid yellow;
width:100%;
padding:20px;
}
th{
border: 1px solid yellow;
text-align:left;    
width:100%;
padding:2px;
}
body{background:black;}

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

</style>
</head>
<body>
<div id="main">

            <div id="nav">
			
		<b><font size="5%">	<u><i><font color="graan" family="times new roman">Rop</font><font color="white" family="times new
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
						  
			 </div> <br><br><br><br></b>
                  
          </div></li> </ul>
       </div> 	
			 </div>    
		<center>
<div id="content1">
<<?php
$host="localhost";
$user="root";
$pass="";
$dbname="ropvatika";
 $conn=mysqli_connect($host,$user,$pass,$dbname);
 $sql="select* from Plant where category='fruit'";
 $data=mysqli_query($conn,$sql);
 $result=mysqli_num_rows($data);
 if($result>0)
 {
  while($row=mysqli_fetch_assoc($data))
  {
      echo "<form action='orderformat.php' method='POST'>";
      echo"<table>";
	  echo"<th>";
      echo"Product Name";
	  echo"</th>";
	  echo"<th>";
	  echo"Image";

	  echo"</th>";
	  
	  echo"<tr>";
	  echo"<td>";
	    echo "Category : &nbsp;&nbsp;&nbsp;".$category=$row["category"]."</br>"."</br>";
	  echo "Name : "; $name=$row["name"];
	  echo "<input type='text' value='$name' name='productname' readonly /><br><br>";
      echo"price :&nbsp;&nbsp;&nbsp;";$price=$row["price"];
	  echo "<input type='text' value='$price' name='price' readonly />";
	  echo "</br></br>";
	  echo "Quantity: <input type='number' name='quant' placeholder = 'Select Quantity'/>";
	  echo"</br></br><input type='Submit' value='Buy Now' />";
	  echo "</form>";
      $file='/ropvatika/'.$row["file"];
	   echo"</td>";
       echo"<td>";
	  
	   ?>
	   <img src="<?php echo $file;?>" width='350px' height='200px'/>
	 
	  </td>
	  </tr></table>
	  <hr>
  <?php
  }
}
?>
    
</div>

<div id="footer"><center>
<p>&copyright are reserved to RopVatika Plant Nursery Portal</p>
</div>
</body>
</html>



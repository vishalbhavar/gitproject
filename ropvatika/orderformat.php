<html>
<head>
    <link rel="stylesheet" href="FirstHome.css">
    <title>orderformat</title>
    <style>
	#footer{
background-color:white;
height:50px;
color:red;
padding:10px;
font-size:16px;
margin-top:50%;
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
    <table align= "left">
	<h3> Order Format</h3>
	
  <tr> 
	     <td><font color="white">
             Name:
			 </font>
                  <td>
                      <input type="text" name="Name"required/>
                  </td>
         <td>
		 <font color="white">
             LastName:
			 </font>
       </td>
	             <td>
	                 <input type="text" name="Lastn"required/>
	    </td></tr></br>
	
	 <tr>
	     <td><font color="white">
           Mobile :
		   </font>
		        <td>
		          <input type="text" name="MobileNo"required/>
		       </td>
			   </td>
				  <td><font color="white">
                       Email:</font>
		    	     </td>
	      			   <td>
						 <input type="text" name="Email_id"required/>
					 </td></tr>
					 
					<tr>
					<td><font color="white">					
                        Product:
					</font>
					<td>
					    <input type="text" name="productn"required/>
					</td>
					</td>
				<td>	<font color="white">
            Price:</font>
			<td>
			<input type="text" name="price"required/>
			</td></tr>
			
	   <tr>
	    <td><font color="white">
	     Quantity:
		 </font>
		 <td> 
		 <input type="text" name="quantity" required/>
		 </td>
		 </td>
		 <td><font color="white"> 
	 Amount:</font>
	 <td>
	 <input type="text" name="amount"required/> 
	 </td></tr>
	 
	  <tr>
	    <td><font color="white">
	 Place:</font>
	 <td>
	 <input type="text" name="place"required/>
	  </td>
		 </td>
		  <td><font color="white"> 
	 City:</font>
	 <td>
	 <input type="text" name="city"required/>
	 </td></tr>
	 
	  <tr>
	    <td><font color="white">
    District:
	</font><td>
	<input type="text" name="district"required/>
	</td></td>
	  <td> <font color="white">
	 State:</font>
	 <td>
	 <input type="text" name="state"required/>
	  </td></tr>
	  
	   <tr>
	      <td><font color="white">
     Pincode: </font><td>
	 <input type="text" name="pin_code"required/>
	 </td></td>
	 	  <td> <font color="white">
		 Date:</font>
		 <td>
		 <input type="date" name="date"required/>
		  </td></tr>
		  <tr>
		  <td> <input type="submit" name="submit" value="Submit"/><br>.
		  </td>
		  </tr>
		  
   

    </table>
	</form>
	
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
  $Name=$_POST['Name'];
 $Lastn=$_POST['Lastn'];
 $MobileNo=$_POST['MobileNo'];
  $Email_id=$_POST['Email_id'];
   $productn=$_POST['productn'];
   $price=$_POST['price'];
    $quantity=$_POST['quantity'];
	 $amount=$_POST['amount'];
	  $place=$_POST['place'];
	 $city=$_POST['city'];
	  $district=$_POST['district'];
	 $state=$_POST['state'];
	 $pin_code=$_POST['pin_code'];
	 $date=$_POST['date'];
	 
   
  
$sql="insert into store values('$Name','$Lastn','$MobileNo','$Email_id','$productn','$price','$quantity','$amount','$place','$city','$district','$state','$pin_code','$date')";

$data=mysqli_query($conn,$sql);
if($data)
{
  echo "Record inserted";
}
$conn->close();
}
 if(isset($_POST["submit"]))
 {
	 $sql="select * from store";
	 $data=mysqli_query($conn,$sql);
	 $result=mysqli_num_rows($data);
	 if($result>0)
	 {
		 while($row=mysqli_fetch_assoc($data))
		 {
	      echo"Price :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";$price=$row["price"];
	      echo "<input type='text' value='$price' name='price' readonly />";
	      echo "</br></br>";
		}
	 }
	
 }
 
?>


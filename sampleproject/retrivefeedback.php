<html>
<head>
<title>Admin Gallery</title>
<script type="text/javascript">
function preventBack(){window.history.forward();}
setTimeout("preventBack()",0);
window.onunload=function(){null};
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.im1{
	float:left;
    width:70px;
    height:60px;
	margin-left:0px;
    margin-top: 6px;
    border-radius:100%;
    background-color:yellow;
    border-color:green;
    border:5pt;
    
}
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-color:#816d8e;
}

.header {
    height:120px;
  background-color:black;
  padding: 20px;
  text-align:;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.column {
  float: left;
  width: 50%;
  padding: 15px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
table{
width:70%;
border:1px solid black;
align:center;
}
th,td{padding:10px;
border:1px solid black;}
h4{
 background-color:white;
 font-size:300%;
 margin-top:-8%;
}
</style>
</head>

<body>
<div class="header">
<img class="im1" src="logo.png">  
	 <h1><u><i><font color="green" family="times new roman">Rop</font><font color="red" family="times new
	 roman">V</font><font color="green" family="times new roman">atika</h1></font>
     <font color="red" family="times new roman"> 
	 <h3>Plant Nursery Portal</h3></font>
  <center><h4>Retrive Feedback</h4></center></u></i>
  </div>



<div class="topnav">
  
  <a href="adminpanel.php">Admin Panel</a>
  <a href="admingallery.php">Admin Gallery</a>
  <a href="adminhome.php">Admin Home</a>
  <a href="retriveorder.php">Retrive Order data</a>
  <a href="retrivefeedback.php">Feedback</a>
   <a href="logout.php">Logout</a>
</div>
<br><br><br>
  <center>  
    
<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "ropvatika";
$conn=mysqli_connect($servername, $username, $pass, $dbname);
if(!$conn)
{
    die('could not connect:'.mysqli_connect_error());
}
$sql="SELECT * FROM feedback";
$temp=mysqli_query($conn,$sql);
if(mysqli_num_rows($temp)>0)
{
	echo"<table><tr><th>Name</th><th>Email</th><th>Message</th></tr>";
    while($row=mysqli_fetch_assoc($temp))
    {
        echo "<tr><td>".$row["Name"]."</td><td>"
            .$row["Email_id"]."</td><td>"
            .$row["Query"]."</td></tr>";
    }
	echo"</table>";
}
else
{
    echo"Invalid Detailed";
}
mysqli_close($conn);
?>
</br></br><a href="adminpanel.php"><input type="button" value="BACK"></a>
</body>
</html>





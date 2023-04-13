<?php
$servername="localhost";
$username="root";
$password="Pass@123";
$dbname="ropvatika";
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 if($conn)
 {
	
}
?>
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
  <center><h4>Admin Gallery</h4></center></u></i>
  </div>
<div class="topnav">
<a href="adminpanel.php">Admin Panel</a>
  <a href="admingallery.php">Admin Gallery</a>
  <a href="adminhome.php">Admin Home</a>
  <a href="retriveorder.php">Retrive Order data</a>
  <a href="retrivefeedback.php">Feedback</a>
   <a href="logout.php">Logout</a>
</div>
 <div class="column">
    <h2>Insert Photos*</h2>
<form method="post">
<label>Id</label><br>
<input type="text" name="id" required/></br></br>
<label>Name</label><br>
<input type="text" name="name"></br></br>
<input type="file" name="upload"></br></br>
<input type="submit" name="save" value="save image to gallery">
</form>
</body>
</html>

<?php
if(isset($_POST["save"]))
{
	$id=$_POST["id"];
	$name=$_POST["name"];
	$file=$_POST["upload"];
 $sql="insert into gallery values('$id','$name','$file')";
$data=mysqli_query($conn,$sql);
if(isset($_POST["save"]))
{
	if($data)
	{
		echo"image save successfully";
	}
else{
	echo"error &nbsp;".$sql; 
}
}	
}

 if(isset($_POST["save"]))
 {
	 $sql="select * from gallery";
	 $data=mysqli_query($conn,$sql);
	 $result=mysqli_num_rows($data);
	 if($result>0)
	 {
		 while($row=mysqli_fetch_assoc($data))
		 {
			 $id=$row["id"];
			 $name=$row["name"];
			 $file='/ropvatika/'.$row["file"];
		}
	 }
 }
 ?>
 
 <img src="<?php echo $file; ?>" height="200px" width="200px">
 </html>
 </body>








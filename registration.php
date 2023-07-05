<?php
session_start();
if(isset($_SESSION["aid"]))
{
	
}
else
{
	echo "<script>alert('First Login Then Goto NaxtZone');window.location.href='../login.php'</script>";
}
?>

<html>
<head>
<link href="../css/bootstrap.min.css" rel="stylesheet"/>
<link href="../css/font-awesome.min.css" rel="stylesheet"/>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12" style="min-height:90px;background:black;font-size:40px;text-align:center;">
<h1 style="text-align:center;text-shadow:2px 2px 2px white;margin-top:8px;color:white;">ADMIN ZONE</h1>
</div></div>
<div class="row">
<div class="col-sm-2" style="min-height:570px;background:silver;">
<a href="dashboard.php" style="text-decoration:none;margin-top:10px;text-shadow:2px 2px 2px white;color:black;">Dashboard</a><br/><br/>
<a href="registration.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Registration</a><br/><br/>
<a href="contact.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Contact</a><br/><br/>
<a href="change.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Change Password</a><br/><br/>
<a href="logout.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Logout</a><br/><br/>
</div>
<div class="col-sm-10" style="min-height:500px;">
<h3 style="text-align:center;">REGISTRATION</h3>


<table class="table table-responsiv" style="background:white;">
<tr>
<th>Sr.No</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Profile</th>
<th>Address</th>
<th>Date</th>
<th>Delete</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","calldb");
if($conn==true)	
{
 $cmd="select * from registration";
 $x=mysqli_query($conn,$cmd);
 if(mysqli_num_rows($x))
 {
	 $a=0;
	while($row=mysqli_fetch_assoc($x))
	{
		$a++;
	echo "<tr><td>$a</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["email"]."</td>
	<td>".$row["mob"]."</td><td><img src=../registration/".$row["profile"]."
	height='50px' width='50px'/></td><td>".$row["address"]."</td><td>".$row["vdt"]."</td>
	<td><a href='../codes/delreg.php/?v=".$row["email"]."'><span class='fa fa-trash'></span></a></td></tr>";	
	}
 }
 else
 {
	 echo "<tr><td colspan='6'>No Record Available into Database</td></tr>";
 }
}
?>
</table>


</div>
</div>
</div>
</body>
</html>
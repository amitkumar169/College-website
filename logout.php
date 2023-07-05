<?php
session_start();
if(isset($_SESSION["aid"]))
{
	session_destroy();
	
	echo "<script>alert('Logout');window.location.href='../login.php'</script>";
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
<div class="col-sm-2" style="min-height:500px;background:silver;">
<a href="dashboard.php" style="text-decoration:none;margin-top:10px;text-shadow:2px 2px 2px white;color:black;">Dashboard</a><br/><br/>
<a href="registration.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Registration</a><br/><br/>
<a href="contact.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Contact</a><br/><br/>
<a href="change.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Change Password</a><br/><br/>
<a href="logout.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Logout</a><br/><br/>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12" style="min-height:50px;background:black;text-align:center;">
Copyright &copy Mecatredz Technology Developed & Designed By Amit Kumar
</div>
</div>
</body>
</html>
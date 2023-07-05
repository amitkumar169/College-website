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
<div class="col-sm-2" style="min-height:500px;background:silver;">

<a href="dashboard.php" style="text-decoration:none;margin-top:10px;text-shadow:2px 2px 2px white;color:black;">Dashboard</a><br/><br/>
<a href="registration.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Registration</a><br/><br/>
<a href="contact.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Contact</a><br/><br/>
<a href="change.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Change Password</a><br/><br/>
<a href="logout.php" style="text-decoration:none;text-shadow:2px 2px 2px white;color:black;">Logout</a><br/><br/>
</div>
<div class="col-sm-10" style="min-height:600px;background:white;">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-3" style="min-height:200px;background:black;margin:10px;margin-top:10px;text-align:center;line-height:5;border-radius:20px;">
<a href="dashboard.php" style="text-decoration:none;color:white;font-size:30px;text-shadow:2px 2px 2px white;">Dashboard</a>
</div>
<div class="col-sm-3" style="min-height:200px;background:black;margin:10px;margin-top:10px;text-align:center;line-height:5;border-radius:20px;">
<a href="registration.php" style="text-decoration:none;color:white;font-size:30px;text-shadow:2px 2px 2px white;">Registration</a>
</div>
<div class="col-sm-3" style="min-height:200px;background:black;margin:10px;margin-top:10px;text-align:center;line-height:5;border-radius:20px;">
<a href="contact.php" style="text-decoration:none;color:white;font-size:30px;text-shadow:2px 2px 2px white;">Contact</a>
</div>
</div>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-3" style="min-height:200px;background:black;margin:10px;margin-top:10px;text-align:center;line-height:5;border-radius:20px;">
<a href="change.php" style="text-decoration:none;color:white;font-size:30px;text-shadow:2px 2px 2px white;">Change</a></div>

<div class="col-sm-3" style="min-height:200px;background:black;margin:10px;margin-top:10px;text-align:center;line-height:5;border-radius:20px;">
<a href="logout.php" style="text-decoration:none;color:white;font-size:30px;text-shadow:2px 2px 2px white;">Logout</a></div>
</div>
</div>
</div>
</div>
</body>
</html>
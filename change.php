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
<div class="col-sm-8" style="min-height:500px;"><h3 style="text-align:center;margin-left:140px;">CHANGE PASSWORD</h3>

<form action="#" method="post">
<span style="color:white">Old Password</span><input type="password" name="opass" class="form-control" placeholder="old password"/><br/><br/>
<span style="color:white">New Password</span><input type="password" name="npass" class="form-control" placeholder="new password"/><br/><br/>
<span style="color:white">confirm Password</span><input type="password" name="cpass" class="form-control" placeholder="confirm password"/><br/><br/>
<button type="submit">
Change Password</button>
</form>

</div>
</div>
</div>
</body>
</html>
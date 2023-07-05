<?php
require "DBManager.php";
$d=$_GET["v"];
$cmd="delete from registration where email='$d'";
$db=new DBManager();
$x=$db->ExecuteQuery($cmd);
if($x==true)
{
	echo "<script>alert('Record Deleted');window.location.href='../../Admin/registration.php'</script>";
}
else
{
    echo "<script>alert('Record Not Deleted');window.location.href='../../Admin/registration.php'</script>";	
}
?>
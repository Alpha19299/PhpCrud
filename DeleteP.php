<?php
error_reporting(0);
$con = mysqli_connect('localhost', 'root', '', 'test');

mysqli_select_db($con, 'test');
$sql = "DELETE FROM tblproducts WHERE ProductID='$_GET[id]'";
if(mysqli_query($con, $sql))
	header("url=ReadP.php");
else
	echo "Not Deleted!";

?>
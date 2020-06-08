<?php
error_reporting(0);
$con = mysqli_connect('localhost', 'root', '', 'cyberexchange');

mysqli_select_db($con, 'cyberexchange');
$sql = "DELETE FROM tblusers WHERE UserID='$_GET[id]'";
if(mysqli_query($con, $sql))
	header("refresh:2 url=Read.php");
else
	echo "Not Deleted!";

?>
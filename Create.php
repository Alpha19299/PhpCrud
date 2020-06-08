<?php
error_reporting(0);
$conn = mysqli_connect('127.0.0.1','root','','cyberexchange');

if (!$conn) {
    echo "Not connected!";
}
echo "  ";

if (isset($_POST['Submit'])) {
	
	$ID = $_POST['ID'];
	$Name = $_POST['Name'];
	$Password = $_POST['Password'];
	
	$sql = "INSERT into tblusers (UserID, UserName, UserPassword) VALUES ('$ID','$Name','$Password')";
	
}

if(!mysqli_query ($conn, $sql)) {
	
	echo 'Not inserted!';
	
}
else{
	echo "Record Inserted!";
	header('location:UsersP.php');
}


?>
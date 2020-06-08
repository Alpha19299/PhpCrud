<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','cyberexchange');

if (!$conn) {
    echo "Not connected!";
}
echo "  ";

if (isset($_POST['Submit'])) {
	
	$ID = $_POST['ID'];
	$Name = $_POST['Name'];
	$Price = $_POST['Price'];
	$Code = $_POST['Code'];
	$Discount = $_POST['Discount'];
	$Stock = $_POST['Stock'];
	$Size = $_POST['Size'];
	$Details = $_POST['Details'];
	
	
	
	$sql = " INSERT INTO `tblproducts`(`ProductID`, `ProductName`, `ProductPrice`, `ProductCode`, `ProductInStock`, `ProductDiscount`, `ProductSize`, `ProductDetails`) VALUES ('$ID','$Name','$Price','$Code','$Stock','$Discount','$Size','$Details')";
	
}

if(!mysqli_query ($conn, $sql)) {
	
	#echo 'Not inserted!';
	
}
else{
	echo "Record Inserted!";
	header('location:ProductsP.php');
}


?>
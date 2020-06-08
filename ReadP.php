<?php

include 'NavbarAdm.php';
include 'DeleteP.php';

error_reporting(1);
$link = mysqli_connect("localhost", "id13853207_root", "vQV959x3~R[js{G2", "id13853207_cyberexchange");
$sql = "SELECT * FROM tblproducts";

	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mavbar</title>

	<style>
	
		#Updatebtn {
			background-color: white; 
  			color:#232323;
  			border: 1px solid #2982E0;
  			padding: 8px 13px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 10px;
  			margin: 4px 2px;
  			transition-duration: 0.4s;
  			cursor: pointer;
		}
		
		#Updatebtn:hover {
  			background-color:#2982E0;
  			color: white;
			border: none;
		}
		
		
		
		#Deletebtn {
			background-color: white; 
  			color:#232323;
  			border: 1px solid #FF3A3D;
  			padding: 8px 13px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 10px;
  			margin: 4px 2px;
  			transition-duration: 0.4s;
  			cursor: pointer;
		}
		
		#Deletebtn:hover {
  			background-color:#FF3A3D;
  			color: white;
			border: none;
		}
		
		.table{
			font-size: 12px;
		}
		
	</style>
	
	<body>
	
	<center>
	<div class="table" style="margin-top: 5%">
	
		<table class="table">
  <tbody>
    <?php
	  if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Name</th>";
				echo "<th>Price</th>";
				echo "<th>Code</th>";
				echo "<th>In Stock</th>";
				echo "<th>Discount</th>";
				echo "<th>Stock Size</th>";
				echo "<th>Details</th>";
                echo "<th>Manage</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ProductID'] . "</td>";
                echo "<td>" . $row['ProductName'] . "</td>";
                echo "<td>" . $row['ProductPrice'] . "</td>";
			    echo "<td>" . $row['ProductCode'] . "</td>";
			    echo "<td>" . $row['ProductInStock'] . "</td>";
			    echo "<td>" . $row['ProductDiscount'] . "</td>";
			    echo "<td>" . $row['ProductSize'] . "</td>";
			    echo "<td>" . $row['ProductDetails'] . "</td>";
				echo "<td> <a href=UpdatePerformP.php?id=".$row['ProductID']."> <input type='submit' name='Update' value='Update' id='Updatebtn' method='POST'> </a>  </td>";
			    echo "<td> <a href=DeleteP.php?id=".$row['ProductID']."> <input type='submit' name='Delete' value='Delete' id='Deletebtn'> </a>  </td>";

				
            echo "</tr>";
        }
		
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

</tbody>
	
</table>
	
	</div>
	</center>
	
</body>
</html>
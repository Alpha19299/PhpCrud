<?php

include 'NavbarAdm.php';
include 'Delete.php';

error_reporting(1);
$link = mysqli_connect("localhost", "root", "", "cyberexchange");
$sql = "SELECT * FROM tblusers";

	
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
				echo "<th>Password</th>";
                echo "<th>Manage</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['UserID'] . "</td>";
                echo "<td>" . $row['UserName'] . "</td>";
                echo "<td>" . $row['UserPassword'] . "</td>";
				echo "<td> <a href=UpdatePerform.php?id=".$row['UserID']."> <input type='submit' name='Update' value='Update' id='Updatebtn' method='POST'> </a>  </td>";
			    echo "<td> <a href=Delete.php?id=".$row['UserID']."> <input type='submit' name='Delete' value='Delete' id='Deletebtn'> </a>  </td>";

				
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
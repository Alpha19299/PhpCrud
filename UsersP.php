<?php 
include 'NavbarAdm.php';
include 'Create.php';
error_reporting(0);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Users</title>
</head>

	
	
<body>
	
	
	
	<div class="fields" style="margin-top: 10%">
		<div class="container h-100 d-flex justify-content-center">
			<form action="Create.php" method="post" class="needs-validation" novalidate>
  				
				<div class="form-group w-50">
					
    				<input type="number" class="form-control" id="ID" aria-describedby="ID" placeholder="UserID" name="ID" required>
					
  				</div>
  				
				<div class="form-group">
    				<input type="text" class="form-control" id="Name" placeholder="Username" name="Name" required>
					
  				</div>
				<div class="form-group">
    				
    				<input type="Password" class="form-control" id="Password" placeholder="Password" name="Password" required>
					
  				</div>
  
  				<button type="submit" name="Submit" class="btn btn-primary">Submit</button>

				
				 <a href="Read.php"><button type="button" class="btn btn-outline-success" name="ShowAll">Show All</button></a>
			</form>
		</div>
	</div>

</body>
</html>
<?php include 'NavbarAdm.php'; ?>
<html>
<head>
<meta charset="utf-8">
<title>Mavbar</title>
	
	<body>
	
<center>
	<form method = "post" style="margin-top: 15%">

				<div class="form-group w-75">		
    				<input type="number" class="form-control" id="ID" placeholder="Current Product ID" name="ID" required>	
  				</div>
		
				<div class="form-group w-75">		
    				<input type="number" class="form-control" id="newID" placeholder="Product ID" name="newID" required>	
  				</div>
  				
				<div class="form-group w-75">
					<input type="text" class="form-control" id="Name" placeholder="Product Name" name="Name" required>	
  				</div>
				
				<div class="form-group w-75">
    				<input type="number" class="form-control" id="Price" placeholder="Product Price" name="Price" required>	
  				</div>
				
				<div class="form-group w-75">		
    				<input type="text" class="form-control" id="Code" placeholder="Product Code" name="Code" required>	
  				</div>
		
				<div class="form-group w-75">
    				<input type="number" class="form-control" id="Discount" placeholder="Product Discount" name="Discount" required>	
  				</div>
	
				<div class="StockCheck" style="margin-left: 0%; margin-bottom: 5%">
					<label><b> Product Stock </b></label><br>
  					<input type="radio" name="Stock" value="yes" style="margin-left: 5%">Yes<input type="radio" name="Stock" value="no"  style="margin-left: 3%">No
				</div>
		
				
					
				<div class="SizeCheck" style="margin-left: 0%; margin-bottom: 3%">
					<label><b> Product Stock Size</b></label><br>
  					<input type="radio" name="Size" value="large" style="margin-left: 3%">Large<input type="radio" name="Size" value="small"  style="margin-left: 3%">Small
				</div>
				
				<div class="form-group w-75" style="margin-top: 5%">
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="Details" placeholder="Product Details"></textarea>
  				</div>

      						<button type="submit" name="submitUpdate" class="btn btn-primary" style="margin-bottom: 15%">Submit</button>
						   <a href="ReadP.php">
						   <button type="button" class="btn btn-outline-secondary"style="margin-bottom: 15%">Go Back</button>
						   </a>
                       
                  
                 
               </form>
	
            </center>
   </body>
</html>
	
	<?php
error_reporting(1);

$link = mysqli_connect("localhost", "id13853207_cyberexchange", "<@5l<Wv807t)>C|X");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "UPDATE tblproducts set ProductID='" . $_POST['newID'] . "', ProductName='" . $_POST['Name'] . "', ProductPrice='" . $_POST['Price'] . "', ProductCode='" . $_POST['Code'] . "' ,ProductInStock='" . $_POST['Stock'] . "', ProductDiscount='" . $_POST['Discount'] . "' ,ProductSize='" . $_POST['Size'] . "' ,ProductDetails='" . $_POST['Details'] . "' WHERE ProductID='" . $_POST['ID'] . "'";

if(mysqli_query($link, $sql)){
    echo " ";
} 
	else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
mysqli_close($link);
?>

<?php include 'NavbarAdm.php' ?>
<html>
<head>
<meta charset="utf-8">
<title>Mavbar</title>
	
	<body>
<center>
	<form method = "post" action = "">
		
         
		<div class="form-group w-25">      		
        		<input type="text" class="form-control" id="example1" name="ID" placeholder="Current ID">
      		</div>
		
		
                       <div class="form-group w-25">      		
        		<input type="text" class="form-control" name="newID" id="example1" placeholder="New ID">
      		</div>

<div class="form-group w-25">      		
        		<input type="text" class="form-control" name="Name" id="example1" placeholder="Name">
      		</div>

<div class="form-group w-25">      		
        		<input type="password" class="form-control" name="Password" id="example1" placeholder="Password">
      		</div>

      						<button type="submit" name="Update" class="btn btn-primary">Submit</button>
						   <a href="Read.php">
						   <button type="button" class="btn btn-outline-secondary">Go Back</button>
						   </a>
                       
                  
                 
		</div>
               </form>
	
            </center>
   </body>
</html>


<?php
error_reporting(1);

$link = mysqli_connect("localhost", "root", "", "cyberexchange");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "UPDATE tblusers SET UserID='$_POST[newID]', UserName='$_POST[Name]', UserPassword='$_POST[Password]' WHERE UserID='$_POST[ID]'";
if(mysqli_query($link, $sql)){
    echo " ";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
?>
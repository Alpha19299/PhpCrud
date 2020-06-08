<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<style>
	
	.LPmain{
		
		width: 350px;
		height: 280px;
		float: right; 
		margin-right: 10%; 
		margin-top: 8%;
		
	}
	
	.headingMain{
		
		font-family: roboto;
		font-style: bolder;
		margin-top: 8%;
		margin-left: 2%;
	}
	
	.headingdesc{
		font-size: 20px;
		margin-left: 2%;
	}
	
	#LoginAdmin{
		margin-top: 30%;
	}
	
	html {
  	scroll-behavior: smooth;
	}
	
	body{
		font-family: roboto;
	}
	
	.ghost-button {
  			display: inline-block;
  			width: 180px;
  			padding: 8px;
  			color: white;
			background: #232323;
  			text-align: center;
  			outline: none;
  			text-decoration: none;
			font-family: roboto;
			font-style: lighter;
			margin-left: 2%;
		}
		
		.ghost-button:hover, .ghost-button:active {
  			background: none;
			border: 1px solid #232323;
 		 	color: #232323;
			text-decoration: none;
		}
	
</style>	

	<script>


</script>
	
<title>Landing Page</title>
</head>

<body>

	<?php include 'NavbarLP.php';?>
	
<img src="Resources/LPmain.png" style="margin-bottom: 5%" class="LPmain" >	
<h1 class="headingMain"> Explore Product Dynamics </h1>
<p class="headingdesc"> Choose your option below to access your designated view. </p>	

	<a class="ghost-button" href="Home.php"> Consumer View </a>
	<a class="ghost-button" href="login.php">Admin View</a>
	
	

</body>
</html>
<?php include 'footer.php';?>
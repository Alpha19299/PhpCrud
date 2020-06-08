<?php include 'NavbarLP.php';?>
<!doctype html>
<html>
<head>
	
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
	<script src="js/form-validation.js"></script>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	
<style>
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<style type="text/css">
.form-style-8{
	font-family: roboto;
	width: 500px;
	padding: 30px;
	background: #FFFFFF;
	margin: 50px auto;
	

}
.form-style-8 h2{
	background: #1B1B1B;
	text-transform: uppercase;
	font-family: 'Open Sans Condensed', sans-serif;
	color: white;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
	margin: -30px -30px 30px -30px;
	width: 40%;
	margin-top: 10%;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
	border: none;
	border-bottom: 1px solid #232323;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
	width: 40%;
	padding-top: 2%;
	padding-bottom: 2%;
	
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="logbtn"]{
	
	background-color:#232323;
	border: 1px solid #232323;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 14px;
	padding: 8px 18px;
	text-decoration: none;
	text-transform: uppercase;
	padding-left: 17.5%;
	padding-right: 17.5%;
	margin-top: 3%;
	margin-bottom: 10%;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="logbtn"]:hover {
	
	
	background-color:white;
	color:#232323;
}
	
	label.error {
    color: red;
    font-size: 1rem;
    display: block;
    margin-top: 5px;
	font-family: roboto;
	font-style: lighter;
}

input.error, textarea.error {
    font-weight: 300;
    color: red;
	}

</style>
	
	
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	
	
	
	<center>
		
		<div class="form-style-8">
  			<h2>Login to your account</h2>
  			<form method="post" action="#" id="loginform" name="loginform">
   		 		<input type="text" name="username" id="username" placeholder=" Username " required>
				<input type="password" name="password" id="password" placeholder=" Password " required>
				

    			<input type="button" value="Login" name="log_btn" id="log_btn" onClick="getInfo()"><br>
				Try -> Username: admin, Password: 123
  			</form>
		</div>
	
	
	</center>
	
		<script>


  $(document).ready(function() {
  $("#loginform").validate({
    rules: {
      username : {
        required: true,
        minlength: 3
      },
      password: {
        required: true,  
        minlength: 3
      }
    },
    messages : {
      username: {
          required: "Please enter your username",
		  minlength: "username should be at least 3 characters long"
      },
      password: {
        required: "Please enter your Password",
        minlength: "Your password must be at least 3 characters long"
      }

    }
  });
});
			
			
</script>
	
	<script>
	
		var objPeople = [
	{ 
		username: "admin",
		password: "123"
	},
	
	{
		username: "ali",
		password: "2929"
	}
	

]

function getInfo() {
	var username = document.getElementById('username').value
	var password = document.getElementById('password').value

	for(var i = 0; i < objPeople.length; i++) {
		
		if(username == objPeople[i].username && password == objPeople[i].password) {
			window.location.href = "Main.php";
			return
		}
	}
	

       alert("Credentials Invalid");
}
	
	</script>

<body>
</body>
</html>
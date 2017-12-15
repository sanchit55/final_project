<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>TO DO LIST</title>
  
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(https://upload.wikimedia.org/wikipedia/commons/7/78/Coffee-apple-iphone-laptop-1_%2823699840693%29.jpg);
	background-size: cover;
	-webkit-filter: blur(0px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #FFFFFF;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: 24%;
	left: 48%;
	background : #FFFFFF;
	box-shadow: 5px 5px 3px #2A2B2B;
	z-index : 5;
	height: 450px;
	width: 260px;
	padding: 10px;
	border-radius: 4px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(63, 127, 191,0.6);
	border-radius: 2px;
	color: #3F7FBF;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(63, 127, 191,0.6);
	border-radius: 2px;
	color: #3F7FBF;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}


.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #3498DB;
	border: 1px solid #3498DB;
	cursor: pointer;
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(128,128,128);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(128,128,128,0.6);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(63, 127, 191,0.6);
}

::-moz-input-placeholder{
   color: rgba(63, 127, 191,0.6);
}
</style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		
		<br>
		<div class="login">
		<form class="form-login" method="post" action="https://web.njit.edu/~sg948/finalProject/task_list/index.php">
		        <input type="text" placeholder="First Name" name="firstname" required><br>
				<input type="text" placeholder="Last Name" name="lastname" required><br>
				<input type="text" placeholder="Contact No" name="contact"><br>
				<input type="text" placeholder="E-mail" name="mailid" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter the valid emailid"><br>
				<input type="text" placeholder="username" name="user"><br>
				<input type="text" placeholder="gender" name="gender"><br>
				<input type="text" placeholder="birth" name="birth"><br>
				<input type="password" placeholder="password" name="password" minlength="6"> <br>
				<input type ="hidden" name="action" value="register">
				<input type="submit" value="Sign-Up">

		</form>
		</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
</body>
</html>
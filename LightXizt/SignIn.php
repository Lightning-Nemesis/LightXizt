<!DOCTYPE html>
<html>
<head>
	<title>
		SignIn
	</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type= "text/javascript" ></script>
</head>
<body>
	<h2><i>Welcome to LightXizT</i></h2>
<div class="container" id="container">
	
	<div class="form-container sign-in-container">
		<form action="SignIn.inc.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fa fa-google-plus"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" placeholder="Email/ User Name" name="email" />
			<input type="password" placeholder="Password" name="password" />
			<!-- <a href="#">Forgot your password?</a> -->
			<button name="signIn">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp"><a href="SignUp.php" style="background-color: transparent; border-color: white; color: white;">Sign Up</a></button>
			</div>
		</div>
	</div>
</div>


</body>
</html>
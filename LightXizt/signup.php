<!DOCTYPE html>
<html>
<head>
	<title>
		SignUp
	</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type= "text/javascript" ></script>
</head>
<body>
	<h2 style="color: white;"><i>Welcome to LightXizT</i></h2>
<div class="container" id="container">
<div class="form-container sign-in-container">
    <form action="surfacesignup.inc.php" method="post">
        <h1>Create Account</h1>
        <div class="social-container">
            <a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
        </div>
        <input type="text" placeholder="Name" name="user_name" />
        <input type="email" placeholder="Email"  name="email" />
        <input type="password" placeholder="Password" name="password" />        
        <input type="password" placeholder="Re Type Password" name="repassword" />
        <br>
        <button name="signUp"><a style="background-color: transparent; border-color: white; color: white;">Sign Up</a></button>
    </form>
</div>
<div class="overlay-container">
    <div class="overlay">

<div class="overlay-panel overlay-right">
    <h1>Welcome Back!</h1>
    <p>To keep connected with us please login with your personal info</p>
    <button class="ghost" id="signIn"><a href="SignIn.php" style="background-color: transparent; border-color: white; color: white;">Sign In</a></button>
</div>
</div>
</div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Valor</title>
 
<link rel="stylesheet" href="css/login.css" type="text/css" />
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/main.js"></script>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
 
<body id="login">
    <div class="title">
        <div class="logo"><img src="images/Valor.png"/></div>
        <p>Meet the people you're interested in meeting</p>
    </div>

    <div class="login-form">
    	<p>Log in<br/>to your account</p>
    	<form action="#" method="post">
    		<div class="input-field">
    			<span class="fa fa-envelope"></span>
    			<input type="email" name="email" placeholder="E-mail address"/>
    		</div>
    		<div class="input-field">
    			<span class="fa fa-lock"></span>
    			<input type="password" name="password" placeholder="Password"/>
    		</div>
    		<div class="text-link">
    			<a id="moveToForg">Forgot your pasword?</a>
    		</div>
    		<input type="submit" name="submit" value="SIGN IN"/>
    		<div class="text-link">
    			<a href="#">Login</a>
    		</div>
    	</form>
    
        <div class="login-form-forg">
            <p>Forgot Your<br/>Password?</p>
            <form action="#" method="post">
                <div class="input-field">
                    <div class="describe-text">Enter your email address to reset your password.<br/>You may need to check your spam folder.</div>
                </div>
                <div class="input-field forg">
                    <span class="fa fa-envelope forg-icon"></span>
                    <input class="forg-email" type="email" name="email" placeholder="Enter your e-mail address"/><input class="forg-pass" type="submit" name="submit" value="SUBMIT"/>
                </div>
            </form>
        </div>
        </div>
</body>
</html>

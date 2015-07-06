<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Valor</title>

{{ HTML::style('css/login.css') }}
{{ HTML::style('font-awesome/css/font-awesome.min.css') }}
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
{{ HTML::script('js/main.js') }}

<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
 
<body id="login">
    <div class="title">
        <div class="logo"> {{ HTML::image('images/Valor.png') }}</div>
        <p>Meet the people you're interested in meeting</p>
    </div>

    <div class="login-form">
    	<p>Log in<br/>to your account</p>
        {{ Form::open(array('url'=>'#', 'method'=>'post')) }}
            <div class="input-field">
                <span class="fa fa-envelope"></span>
                {{ Form::email('email', $value = null, $attributes = array('placeholder'=>'E-mail address')) }}
            </div>
            <div class="input-field">
                <span class="fa fa-lock"></span>
                {{ Form::password('password', $value = null, $attributes=array('placeholder'=>'Password')) }}
            </div>
            <div class="text-link">
                <a href='#' id="moveToForg">Forgot your pasword?</a>
            </div>
            {{ Form::submit('SIGN IN') }}
            {{ Form::close() }}
    		<div class="text-link">
    			<a href="#">Login</a>
    		</div>
   
    
        <div class="login-form-forg">
            <p>Forgot Your<br/>Password?</p>
            {{ Form::open(array('url'=>'#', 'method'=>'post')) }}
                <div class="input-field">
                    <div class="describe-text">Enter your email address to reset your password.<br/>You may need to check your spam folder.</div>
                </div>
                <div class="input-field forg">
                    <span class="fa fa-envelope forg-icon"></span>
                    {{ Form::email('email', $value = null, $attributes = array('class'=>'forg-email','placeholder'=>'Enter your e-mail address')) }}
                     {{ Form::submit('SUBMIT', array('class' => 'forg-pass')) }} 
                    {{ Form::close() }}
                </div>
            </form>
        </div>
        </div>
</body>
</html>

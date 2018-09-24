<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Asset Management System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--?<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-->

<link rel="stylesheet" href="../css/sstyles.css">
</head>
<body>
<?php include('../../gautam/html/navbar.html');echo("<style>.title{text-align: center;}</style>"); ?>
<div class="signup-form">	
    <form action="" method="post">
		<h2>Create Account</h2>
		
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="firstname" placeholder="Firstname" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="lastname" placeholder="lastname" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
				<input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
			</div>
        </div>        
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>
		
    </form>
	<div class="text-center">Already have an account? <a href="login.html">Login here</a>.</div>
</div>
<?php include('../../gautam/html/footer.html'); echo("<style>footer{margin-left: 0px;}</style>")?>
</body>
</html>                            
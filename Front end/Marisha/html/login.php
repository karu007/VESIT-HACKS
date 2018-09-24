<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Asset Management System</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-->
        <link rel="stylesheet" href="../css/lstyles.css">
    </head>
    <body>
        <?php include('../../gautam/html/navbar.html');echo("<style>.title{text-align: center;}</style>"); ?>
        <div class="login-form">
            <form action="" method="post">
                <h2 class="text-center">Login</h2>		
                <div class="text-center social-btn">
                    <p>Sign in with Google</p>
                    <a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i> <b>Google</b></a>
                </div>
                <div class="or-seperator"><i>or</i></div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Username/Email Address" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    </div>
                </div>        
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block login-btn"> Login</button>
                </div>


            </form>
            <div class="hint-text small">Don't have an account? <a href="signup.html" class="text-success">Register Now!</a></div>
        </div>
        <?php include('../../gautam/html/footer.html'); ?>
    </body>
</html>                            
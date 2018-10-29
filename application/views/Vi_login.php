<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
   
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/scss/style.css')?>">
    
	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="sufee-login d-flex align-content-center flex-wrap" >
	
        <div class="container">
		
            <div class="login-content">
                <div class="login-form">
				<!-- <img src="<?php echo base_url('assets/prusahaan.jpg') ?> "> -->
                    <form action="<?php echo base_url('login/login_validation'); ?>" method="post">
                        <fieldset>
						<div class="form-group">
                            <label>Username</label>
                            <input class="form-control" name="username" type="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" type="password" placeholder="Password" required>
                        </div>
                       
                        <input type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url('assets/js/vendor/jquery-2.1.4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/plugins.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>


</body>

</html>
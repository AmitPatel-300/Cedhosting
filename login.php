<?php
/**
 * Template File Doc Comment
 * 
 * PHP version 7
 *
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

/**
 * Template Class Doc Comment
 * 
 * Template Class
 * 
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
require_once 'User.php';
$User=new User();
if (isset($_POST['login'])) {
    $email=isset($_POST['email'])?$_POST['email']:'';
    $pass=md5(isset($_POST['pass'])?$_POST['pass']:'');
    $User->login($email, $pass);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/cedhost.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
            <script src="js/jquery.swipebox.min.js"></script> 
                <script type="text/javascript">
                    jQuery(function($) {
                        $(".swipebox").swipebox();
                    });
                </script>
<!--script-->
</head>
<body>
    <!---header--->
        <?php include_once 'header.php'?>
    <!---header--->
        <!---login--->
            <div class="content">
                <div class="main-1">
                    <div class="container">
                        <div class="login-page">
                            <div class="account_grid">
                                <div class="col-md-6 login-left">
                                     <h3>new customers</h3>
                                     <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                     <a class="acount-btn" href="account.php">Create an Account</a>
                                </div>
                                <div class="col-md-6 login-right">
                                    <h3>registered</h3>
                                    <p>If you have an account with us, please log in.</p>
                                    <form action="" method="POST">
                                      <div>
                                        <span>Email Address<label>*</label></span>
                                        <input type="text" name="email" required> 
                                      </div>
                                      <div>
                                        <span>Password<label>*</label></span>
                                        <input type="password" name="pass" required> 
                                      </div>
                                      <?php if(empty ($_SESSION['User'])):?>
                                      <a class="forgot" href="#">Forgot Your Password?</a>
                                      <input type="submit" value="Login" name="login">
                                      <?php endif?>
                                    </form>
                                </div>	
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- login -->
<!---footer--->
<?php require 'footer.php';?>
<!---footer--->
</body>
</html>

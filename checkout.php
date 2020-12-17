<!DOCTYPE HTML>
<html>
<head>
<title>Ced Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template,
 Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung,
 LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load",
 function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar()
 { window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/cedhost.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!---fonts-->
<!--script-->
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">

<!--lightboxfiles-->
<script type="text/javascript">
$(function() {
$('.team a').Chocolat();
});
</script>	
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
<script type="text/javascript">
$(function() {

$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
});
</script>						
<!--script-->
</head>
<body>
<?php 
session_start();
if (!empty($_SESSION['User'])) {

} else {
    session_destroy();
    header('location:login.php');
} 
?>
<?php require_once 'header.php'?>
<form class='text text-center'>
<table class="table table-bordered table-hover">
<caption class="text-dark h3 font-weight-bold ">CHECK OUT</caption>
  <thead class="thead text-center col-md-4">
   <h2>ORDER SUMMARY</h2>
      <tr><th scope="col">Product Detail</th><th><?php echo $_SESSION['cart'][0]['pname']?></th></tr>
      <tr><th scope="col">Webspace</th><th><?php echo $_SESSION['cart'][0]['ws']?></th></tr>
      <tr><th scope="col">Domain</th><th><?php echo $_SESSION['cart'][0]['mail']?></th></tr>
      <tr><th scope="col">Mail</th><th><?php echo $_SESSION['cart'][0]['mail']?></th><tr>
      <tr><th scope="col">language/support</th><th><?php echo $_SESSION['cart'][0]['lang']?></th></tr>
      <tr><th scope="col">BandWidth</th><th><?php echo $_SESSION['cart'][0]['band']?></th></tr>
      <tr><th scope="col">Month Price</th><th><?php echo $_SESSION['cart'][0]['mprice']?></th></tr>
      <tr><th scope="col">Annual Price</th><th><?php echo $_SESSION['cart'][0]['aprice']?></th></tr>
    </tr>
  </thead>
  <tbody>

  </tbody>
  </table>
  <button type="button"  class="btn btn-danger text-center" id="placeorder">Place Order</button>

   </form>
<?php require_once 'footer.php'?>
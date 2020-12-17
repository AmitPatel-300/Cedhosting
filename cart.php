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
session_start();
$product=array();
 $_SESSION['cart']=array();

if (isset($_REQUEST['name'])) {
    $pname=$_REQUEST['name'];
    $ws=$_REQUEST['ws'];
    $domain=$_REQUEST['domain'];
    $mail=$_REQUEST['mail'];
    $lang=$_REQUEST['lang'];
    $bandwidth=$_REQUEST['band'];
    $mprice=$_REQUEST['mprice'];
    $aprice=$_REQUEST['aprice'];
    $product=array('pname'=>$pname,'ws'=>$ws,'domain'=>$domain,'mail'=>$mail,'lang'=>$lang,'band'=>$bandwidth,'mprice'=>$mprice,'aprice'=>$aprice);
}
array_push($_SESSION['cart'], $product); 
?>
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
<?php require 'header.php'?>
<!---header--->
<div class="container-fluid">
<form class='text text-center'>
<table class="table table-bordered table-hover">
<?php if (isset($_REQUEST['name']) ) :?>    
<caption class="text-dark h3 font-weight-bold ">Cart</caption>
  <thead class="thead text-center">

    <tr>
      <th scope="col">Product name</th>
      <th scope="col">Webspace</th>
      <th scope="col">Domain</th>
      <th scope="col">Mail</th>
      <th scope="col">language/support</th>
      <th scope="col">BandWidth</th>
      <th scope="col">Month Price</th>
      <th scope="col">Annual Price</th>
    </tr>
  </thead>
  <tbody>
   <tr>
   <td><?php echo $pname?></td>
   <td><?php echo $ws?>GB</td>
   <td><?php echo $domain?></td>
   <td><?php echo $mail?></td>
   <td><?php echo $lang?></td>
   <td><?php echo $bandwidth?></td>
   <td><?php echo $mprice?></td>
   <td><?php echo $aprice?></td>
   </tr>
  </tbody>
  </table>
  <button type="button"  class="btn btn-danger text-center" id="checkout">CHECKOUT</button>
<?php endif ?>
<?php if (!isset($_REQUEST['name']) ) : 
       echo '<p class=h1>CART IS EMPTY</p>'; 
?> 
<?php endif?>
   </form>
</div>
<?php require 'footer.php';?>
<script>
  $(document).ready(function(){
    $("#checkout").click(function(){
      window.location.href="checkout.php"; 
    });
  });
</script>
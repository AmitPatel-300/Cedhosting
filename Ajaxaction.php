<?php
require_once 'Admin/Product.php';
require_once 'User.php';
$product=new Product();
$User=new User();
$action=$_POST['action']; 
switch($action) {
case "hostinglist" :
    $data=$product->hostinglist();
    print_r($data); 
    break;

case "update":
    $email=$_POST['Email'];
    $otp=$_POST['OTP'];
    $data=$User->update($email, $otp);
    echo $data;
    break;
}
?>
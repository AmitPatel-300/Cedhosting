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
?>
<?php require_once 'header.php';
  require_once 'Product.php';
?>

    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Add Product</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#">
                  <i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" 
                  aria-current="page">Add Product</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              
            </div>
          </div>
          <!-- Card stats -->
</div>
</div>
</div>

    <!-- Page content -->
    <div class="container-fluid mt-6">
      <div class="row">
      <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-9 col-md-7 text-muted">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-muted pb-5">
              <div class="text-muted text-center "><small></small></div>
              <div class="btn-wrapper text-center">
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small class="h4 text-gray"><h1>Create New Product<h1></small>
                <small class="h4 text-gray"><h3>Enter Product Details<h3></small>
              </div>
              <hr>
              <form role="form">
                <div class="form-group col-md-12">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4">Select Product Category 
                  <span class="text-danger ml-1">*</span></label>  
                  <div class="input-group ">
                  <select class="custom-select" id="aval" id="inputGroupSelect02">
                  </select>
                  </div>
                </div>
                <div class="form-group ">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4 ">Enter Product Name 
                   <span class="text-danger ml-1">*</span></label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"  
                  type="text" id="prodname" onfocusout="pname()"><br>
                  </div>
                  <small class="text text-danger" id="pn"></small>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4">Page URL</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"  type="text" id="link">
                  </div>
                </div>
                <hr>
                <div class="text-muted mb-4 text-center">
                <small class="h1">Product details</small><br>
                <small class="h4 ">Enter Product Detail Below</small>
              </div>
              <hr>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h3 ">Enter Monthly Price</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"
                   placeholder="ex:23"  type="text"
                    maxlength="15" id="mprice" onfocusout="monthprice()">
                  </div>
                  <small class="text text-danger" id="mp"></small>
                  <label class="h5 text-gray">This will be Monthly Plan</label>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4">Enter Annual Price</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2" placeholder="ex:23" type="text"
                   maxlength="15" id="aprice" onfocusout="annualprice()">
                  </div>
                  <small class="text text-danger" id="ap"></small>
                  <label class="h5 text-gray">This will be Annual Plan</label>
                  
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4">SKU</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2" type="text" id="sku" 
                  onfocusout="SKU()">
                  </div>
                  <small class="text text-danger" id="SKU"></small>
                </div>
                <hr>
                <div class="text-center text-muted mb-4">
                <small class="h1">Features</small><br>
              </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4 ">Web Space(in GB) 
                  <span class="text-danger ml-1">*</span></label>  
                  <div class="input-group ">
            <input class="form-control pl-2" type="text" id="webspace" maxlength="5"
                   onfocusout="WEBSPACE()">
                 </div>
                 <small class="text text-danger" id="ws"></small>
                  <label class="h5 text-gray">Enter 0.5 for 512</label>
                </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4 ">BandWidth (IN GB) 
                  <span class="text-danger ml-1">*</span></label>  
                  <div class="input-group ">
              <input class="form-control pl-2" type="text" id="band" maxlength="5" 
                  onfocusout="BandWidth()">
                  </div>
                  <small class="text text-danger" id="bw"></small>
                  <label class="h5 text-gray">Enter 0.5 for 512</label>
                </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4  mt-1">Free Domain 
                  <span class="text-danger ml-1">*</span></label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"  type="text" id="domain" 
                  onfocusout="FreeDomain()">
                  </div>
                  <small class="text text-danger" id="fd"></small>
                  <label class="h5 text-gray">Enter 0 if no domain available 
                  in this service</label>
                </div>
                <div class="form-group mt-1">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4 ">Language/Technology Support</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"  type="text" id="lang" 
                  onfocusout="LangSupp()">=
                  </div>
                  <small class="text text-danger" id="lts"></small>
                  <label class="h5 text-gray">Separate by (,) Ex: PHP, MySQL,
                   MongoDB</label>
                </div>
                <div class="form-group mt-1">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4">Mailbox <span class="text-danger ml-1">
                  *</span></label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"  type="text" id="mail"
                   onfocusout="MailBox()" >
                  </div>
                  <small class="text text-danger" id="mb"></small>
                <label class="h5 text-gray">Enter Number of mailbox will be provided,
                   enter 0 if none</label>
                </div>
                
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4 addproduct ">
                  Add Product</button>
                </div>
              </form>
            </div>
          </div>
         </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-8">
<div class="card">
<div class="table-responsive">
<!-- Projects table -->
<table class="table align-items-center table-flush">

              
              </table>
              </div>
          </div>
        </div>
      </div>
      </div>
</div>
</div>
</div>
<?php require 'footer.php'?>
<script>
$(document).ready(function(){

  $(".btn").attr("disabled", true);
    $.ajax({
    url :'Adminaction.php',
    type : 'post',
    dataType  :'json',
    data :{
      ACT:"hostinglist"
    },
    success : function(data) {
      html='';
      for(var i=0;i<data.length;i++){
        html+='<option value='+data[i]['id']+'>'+data[i]['prod_name']+'</option>';
      }
      $("#aval").html(html);
    }
  });

  
  $('.addproduct').click(function(){
    prodid=$('#aval').val().trim();
    prodname=$('#prodname').val().trim();
    prodlink=$('#link').val().trim();
    monthprice=$('#mprice').val().trim();
    annualprice=$('#aprice').val().trim();
    sku=$('#sku').val().trim();
    webspace=$('#webspace').val().trim();
    band=$('#band').val().trim();
    domain=$('#domain').val().trim();
    lang=$('#lang').val().trim();
    mail=$('#mail').val().trim();
   
    x="AddMultiple";
    $.ajax({
    url :'Adminaction.php',
    type : 'post',
    dataType  :'json',
    data :{
      ACT:x,PRODID:prodid,
      PNAME:prodname,PLINK:prodlink,
      MPRICE:monthprice,APRICE:annualprice,
      SKU:sku,WSP:webspace,
      Band:band,DOM:domain,
      LANG:lang,Mail:mail
    },
    success : function(data) {
      if(data==1){
        alert("Inserted successfully ");
        window.location.href='addproduct.php';
      }
    }
  });

    });
  });
</script>
<script>
 var namelen=0;
  var monlen=0;
  var annulen=0;
  var weblen=0;
  var domlen=0;
  var maillen=0;
  var bandlen=0;
  var langen=0;
  var skulen=0;

function pname(){
var regex=/(^([a-zA-Z]+\-[0-9]+$))|(^([a-zA-Z])+$)/;
var regnumeric=/^[0-9_!"\-]+$/
var len;
var pname=document.getElementById('prodname').value;
len=pname.length;

if(!(pname).match(regex)){
  document.getElementById('prodname').focus();
  document.getElementById('pn').innerHTML="alphabetic ,alphanumeric with (-) only";
  namelen=0;
  return false;
}
else{
  document.getElementById('pn').innerHTML="";
  namelen=1;
  if((namelen+monlen+annulen+weblen+domlen+maillen+bandlen+langen+skulen)>=9){
  $(".btn").attr("disabled", false);
  }
  return true;
}
}

function monthprice(){
  var regnum=/^[0-9]*\.?[0-9]*$/;
  var month=document.getElementById('mprice').value;
if(month=="" || !(month).match(regnum)){
 document.getElementById('mp').innerHTML="numeric and special character ('.') only";
  document.getElementById('mprice').focus();
  monlen=0;
  return false;
}
else{
  document.getElementById('mp').innerHTML="";
  monlen=1;
  if((namelen+monlen+annulen+weblen+domlen+maillen+bandlen+langen+skulen)>=9){
  $(".btn").attr("disabled", false);
  }
  return true;
}
}

function annualprice(){
var regnum=/^[0-9]*\.?[0-9]*$/;
var annual=document.getElementById('aprice').value;
if(annual=="" ||!(annual.match(regnum))){
document.getElementById('ap').innerHTML="numeric and special character ('.') only";
document.getElementById('aprice').focus();
annualen=0;
return false;
}
else{
  document.getElementById('ap').innerHTML="";
  annulen=1;
  if((namelen+monlen+annulen+weblen+domlen+maillen+bandlen+langen+skulen)>=9){
  $(".btn").attr("disabled", false);
  }
  return true;
}
}

function SKU(){
var skureg=/^[A-Za-z0-9_!"]+$/;
var skuregular=/[!@$%^&*(),.?":{}|<>]/g;
sku=document.getElementById('sku').value;
if(sku=="" || (sku).match(skuregular)){
document.getElementById('SKU').innerHTML="special character # and - are allowed";
document.getElementById('sku').focus();
skulen=0;
return false;
}
else{
  document.getElementById('SKU').innerHTML="";
  skulen=1;
  if((namelen+monlen+annulen+weblen+domlen+maillen+bandlen+langen+skulen)>=9){
  $(".btn").attr("disabled", false);
  }
  return true;
}

// if(sku.match(skureg)){
// document.getElementById('SKU').innerHTML="must contain # or -";
// document.getElementById('sku').focus();
// return false;
// }
}

function WEBSPACE(){
var regnum=/^[0-9]*\.?[0-9]*$/;
var web=document.getElementById('webspace').value;
if(web=="" || !(web).match(regnum)){
document.getElementById('ws').innerHTML="please filled this field with max 5 digit";
document.getElementById('webspace').focus();
weblen=0;
return false;
}
else{
  document.getElementById('ws').innerHTML="";
  weblen=1;
  if((namelen+monlen+annulen+weblen+domlen+maillen+bandlen+langen+skulen)>=9){
  $(".btn").attr("disabled", false);
  }
  return true;
}
}

function BandWidth(){
var regnum=/^[0-9]*\.?[0-9]*$/;
var bandwidth=document.getElementById('band').value;
if(bandwidth=="" || !(bandwidth).match(regnum)){
document.getElementById('bw').innerHTML="numeric and special character ('.') only";
document.getElementById('band').focus();
bandlen=0;
return false;
}
else{
  document.getElementById('bw').innerHTML="";
  bandlen=1;
  if((namelen+monlen+annulen+weblen+domlen+maillen+bandlen+langen+skulen)>=9){
  $(".btn").attr("disabled", false);
  }
  return true;
}
}

function FreeDomain(){
 // var regex=/^[A-Za-z!]+$/;
  var num=/^[0-9!]+$/;
var domain=document.getElementById('domain').value;
if(domain=="" || !(domain).match(num)){
document.getElementById('fd').innerHTML="only numeric are allowed";
document.getElementById('domain').focus();
domlen=0;
return false;
}
else{
  document.getElementById('fd').innerHTML="";
  domlen=1;
  if((namelen+monlen+annulen+weblen+domlen+maillen+bandlen+langen+skulen)>=9){
  $(".btn").attr("disabled", false);
  }
  return true;
}

}

function MailBox(){
  var num=/^[0-9!]+$/;

var mail=document.getElementById('mail').value;
if(mail=="" || !(mail).match(num)){
document.getElementById('mb').innerHTML="please filled mailbox field with numeric only";
document.getElementById('mail').focus();
maillen=0;
return false;
}
else{
  document.getElementById('mb').innerHTML="";
  maillen=1;
  if((namelen+monlen+annulen+weblen+domlen+maillen+bandlen+langen+skulen)>=9){
  $(".btn").attr("disabled", false);
  }
  return true;
}

}

function LangSupp(){
var regex=/(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+$))|(^([a-zA-Z]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+\,[a-zA-Z]+$))|(^([a-zA-Z])+$)/;
var regnumeric=/^[0-9_!"\-]+$/;
var lang=document.getElementById('lang').value;
if(lang=="" || !(lang).match(regex)){
document.getElementById('lts').innerHTML="alphanumeric, alphabetic and special character (,) only";
document.getElementById('lang').focus();
langen=0;
return false;
}
else{
  document.getElementById('lts').innerHTML="";
  langen=1;
  if((namelen+monlen+annulen+weblen+domlen+maillen+bandlen+langen+skulen)>=9){
  $(".btn").attr("disabled", false);
  }
  return true;
}


}
</script>

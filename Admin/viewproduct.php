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
<?php require_once 'Product.php'?>
<?php require 'header.php'?>
<?php

?>
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
                  <li class="breadcrumb-item">
                  <a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" 
                  aria-current="page">Add Product</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              
            </div>
            <div class="col-xl-3 col-md-6">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
      <!-- Page content -->
      <div class="row">
      <div class="col-xl-12 mt-2">
      <div class="card">
      <div class="table-responsive">
      <table class="table align-item-center table-flush" id='tableshow'>
       <thead class="thead-light">
        <tr>
        <th>Parent Product Name</th>
        <th>product Name</th>
        <th>Html</th>
        <th>prod_available</th>
        <th>product launch date</th>
        <th>Web Space(in GB) *</th>
        <th>BandWidth (IN GB) *</th>
        <th>Free Domain *</th>
        <th>Language/Technology Support</th>
        <th>Mailbox*</th>
        <th>Monthprice*</th>
        <th>Annual price*</th>
        <th>SKU</th>
        <th colspan="2" class="text-center">Action</th>
        </tr>
     </thead>
     <tbody id="showproduct">
     </tbody>
     </table> 
     </div>
    </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="editproduct" tabindex="-1" role="dialog"
 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" class="text-muted h3"  
        id="exampleModalLongTitle">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body showeditcat">
      <div class="form-group ">
            <label class="text-dark h5" for="exampleInputEmail1">
            Select Product category 
            <span class="text-danger ml-1">*</span></label>
            <select class="custom-select" id="aval">
            </select>
            <label class="text-dark h5"  for="exampleInputEmail1">Enter product Name
            </label>
            <input type="text" class="form-control" value="" id="prodname" 
            onfocusout="pname()" aria-describedby="emailHelp">
            <div><small id="pn" class="text text-danger"></small></div>
            <label class="text-dark h5"  for="exampleInputEmail1">HTML</label>
             <div>
                <div class="justify-content-md-center">
                  <div class="col-md-12 col-lg-12">
                    <h1 class="h3 mb-2 text-muted"></h1>
                    <label>Enter html content here</label>
                    <div class="form-group">
                        <textarea id="editor"></textarea>
                    </div>          
                </div>
              </div>
            </div>
             <label class="text-dark h5" for="exampleInputEmail1">
            Month Price</label>
            <input type="text" class="form-control" id="month" maxlength="15" 
            onfocusout="monthprice()" aria-describedby="emailHelp" value="">
            <div><small id="mp" class="text text-danger"></small></div>
            <label class="text-dark h5" for="exampleInputEmail1">
            Annual Price</label>
            <input type="text" class="form-control" id="annual" maxlength="15"
            onfocusout="annualprice()" aria-describedby="emailHelp" value="">
            <div><small id="ap" class="text text-danger"></small></div>
            <label class="text-dark h5" for="exampleInputEmail1">SKU</label>
            <input type="text" class="form-control" id="sku" 
            onfocusout="SKU()" aria-describedby="emailHelp" value="">
            <div><small id="sk" class="text text-danger"></small></div>
            <label class="text-dark h5" for="exampleInputEmail1">Webspace in GB 
            <span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="webspace" maxlength="5" 
            onfocusout="WEBSPACE()" aria-describedby="emailHelp" value="">
            <div><small id="ws" class="text text-danger"></small></div>
            <label class="text-dark h5"  for="exampleInputEmail1">
            Bandwidth in GB <span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="band" maxlength="5"
            onfocusout="BandWidth()" aria-describedby="emailHelp" value="">
            <div><small id="bw" class="text text-danger"></small></div>
            <label class="text-dark h5" for="exampleInputEmail1">
            Free Domain <span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="domain" 
            onfocusout="FreeDomain()" aria-describedby="emailHelp" value="">
            <div><small id="fd" class="text text-danger"></small></div>
            <label class="text-dark h5" for="exam	2	PHPpleInputEmail1">
             Language/technology support</label>
            <input type="text" class="form-control" id="lsp" 
            onfocusout="LangSupp()" aria-describedby="emailHelp" value="">
            <div><small id="LSP" class="text text-danger"></small></div>
            <label class="text-dark h5"  for="exampleInputEmail1">
            Mailbox <span class="text-danger ml-1">*</span></label>
            <input type="text" class="form-control" id="mail" 
            onfocusout="MailBox()" aria-describedby="emailHelp" value="">
            <div><small id="mb" class="text text-danger"></small></div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" 
            data-dismiss="modal">cancel</button>
            <button type="button" class="btn btn-success 
            updateprod" id="upprod" value="">Update</button>
          </div>   
          </div>
      </div>  
    </div>
  </div>
</div>
</div>
</div>
<script>
function pname(){
var regex=/(^([a-zA-Z]+\-[0-9]+$))|(^([a-zA-Z])+$)/;
var regnumeric=/^[0-9_!"\-_]+$/;
var len;
var pname=document.getElementById('prodname').value;
len=pname.length;

if(!(pname).match(regex)){
  document.getElementById('prodname').focus();
  document.getElementById('pn').innerHTML="alphabetic ,alphanumeric with (-) only";
  return false;
}
else{
  document.getElementById('pn').innerHTML="";
  $(".btn").attr("disabled", false);
  return true;
}
}

function monthprice(){
  var regnum=/^[0-9]*\.?[0-9]*$/;
  var month=document.getElementById('month').value;
if(month=="" || !(month).match(regnum)){
 document.getElementById('mp').innerHTML="numeric and special character ('.') only";
  document.getElementById('month').focus();
  return false;
}
else{
  document.getElementById('mp').innerHTML="";
  $(".btn").attr("disabled", false);
  return true;
}
}

function annualprice(){
var regnum=/^[0-9]*\.?[0-9]*$/;
var annual=document.getElementById('annual').value;
if(annual=="" ||!(annual.match(regnum))){
document.getElementById('ap').innerHTML="numeric and special character ('.') only";
document.getElementById('aprice').focus();
return false;
}
else{
  document.getElementById('ap').innerHTML="";
  $(".btn").attr("disabled", false);
  return true;
}
}

function SKU(){
var skureg=/^[A-Za-z0-9_!"]+$/;
var skuregular=/[!@$%^&*(),_.?":{}|<>]/g;
sku=document.getElementById('sku').value;
if(sku=="" || (sku).match(skuregular)){
document.getElementById('sk').innerHTML="special character # and - are allowed";
document.getElementById('sku').focus();
skulen=0;
return false;
}
else{
  document.getElementById('sk').innerHTML="";
  $(".btn").attr("disabled", false);
  return true;
}

// if(sku.match(skureg)){
// document.getElementById('SKU').innerHTML="must contain # or -";
// document.getElementById('sku').focus();
// return false;
// }2#@$$##$
var regnum=/^[0-9]*\.?[0-9]*$/;
var web=document.getElementById('webspace').value;
if(web=="" || !(web).match(regnum)){
document.getElementById('ws').innerHTML="numeric and special character ('.') only";
document.getElementById('webspace').focus();
return false;
}
else{
  document.getElementById('ws').innerHTML="";
  $(".btn").attr("disabled", false);
  return true;
}
}

function BandWidth(){
var regnum=/^[0-9]*\.?[0-9]*$/;
var bandwidth=document.getElementById('band').value;
if(bandwidth=="" || !(bandwidth).match(regnum)){
document.getElementById('bw').innerHTML="numeric and special character ('.') only";
document.getElementById('band').focus();
return false;
}
else{
  document.getElementById('bw').innerHTML="";
  $(".btn").attr("disabled", false);
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

return false;
}
else{
  document.getElementById('fd').innerHTML="";
  $(".btn").attr("disabled", false);
  return true;
}

}

function MailBox(){
  var num=/^[0-9!]+$/;
var mail=document.getElementById('mail').value;
if(mail=="" || !(mail).match(num)){
document.getElementById('mb').innerHTML="please filled mailbox field with numeric only";
document.getElementById('mail').focus();
return false;
}
else{
  document.getElementById('mb').innerHTML="";
  $(".btn").attr("disabled", false);
  return true;
}

  }

function LangSupp(){
var regex=/(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+[0-9]+\, [a-zA-Z]+$))|(^([a-zA-Z]+\, [a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+\, [a-zA-Z]+$))|(^([a-zA-Z])+$)/;
var regnumeric=/^[0-9_!"\-]+$/;
var lang=document.getElementById('lsp').value;
if(lang=="" || !(lang).match(regex)){
document.getElementById('LSP').innerHTML="alphanumeric, alphabetic and special  character (,) only";
document.getElementById('lsp').focus();
return false;
}
else{
  document.getElementById('LSP').innerHTML="";
  $(".btn").attr("disabled", false);
  return true;
}
}
</script>
<script>
var html="";
$(document).ready(function(){ 
  $.ajax({
    url :'Adminaction.php',
    type : 'post',
    dataType  :'json',
    data :{
      ACT:"ShowProductsDesc"
    },
    success : function(data) {
    output='';
    for(var i=0;i<data.length;i++){
    var obj = jQuery.parseJSON(data[i]['description']);
    output+='<tr><td class="cat'+i+'"></td><td>'+data[i]['prod_name']+'</td><td>'+data[i]['html']+'</td>';
    if(data[i]['prod_available']==1){
    output+='<td>Available</td>';
    }
    else{
    output+='<td>Not Available</td>';
    }
    output+='</td><td>'+data[i]['prod_launch_date']+'</td>\
    <td>'+obj.web_space+'</td><td>'+obj.band+'</td><td>'+obj.domain+'</td>\
    <td>'+obj.lang+'</td><td>'+obj.mail+'</td><td>'+data[i]['mon_price']+'</td>\
    <td>'+data[i]['annual_price']+'</td><td>'+data[i]['sku']+'</td><td>\
      <input type="button"  data-toggle="modal" \
      data-id='+data[i]['prod_id']+' data-target="#editproduct"\
      class="btn btn-info edit" value="edit"></td><td><input type="button" value="delete" data-id='+data[i]['prod_id']+' class="btn btn-danger delete"></td></tr>';
      }
     $("#tableshow").DataTable();
     $('#showproduct').html(output);
    }
  });  
  
  

//hostinglist
  $.ajax({
    url :'Adminaction.php',
    type : 'post',
    dataType  :'json',
    data :{
      ACT:"hostinglist"
    },
    success : function(data) {
      html='<option>Please Select</option>';
      for(var i=0;i<data.length;i++){
        html+='<option value="'+data[i]['id']+'">\
        '+data[i]['prod_name']+'</option>';
      }
      $("#hosting, #aval").html(html);

    }
  });

  //Parent Product
  $.ajax({
       url: 'Adminaction.php',
        type: 'POST',
        data: {
            ACT:"ParentProduct",
        },
        dataType:'json',
        success: function(data) {
          for(var i=0;i<data.length;i++){
           $('.cat'+i).html(data[i]['prod_name']);
          }
          
      }
  });

  //editproduct

  $(document).on("click",'.edit',function(){
    var html="";
    var id=$(this).data('id');
    var x="editProduct";
    $.ajax({
        url: 'Adminaction.php',
        type: 'POST',
        data: {
            ACT: x,Id:id
        },
        dataType:'json',
        success: function(data) {
          var obj = jQuery.parseJSON(data[0]['description']);
          $('#aval').val(data[0]['prod_parent_id']);
          $('#prodname').val(data[0]['prod_name']);
          $('#prod_link').val(data[0]['html']);
          $('#webspace').val(obj.web_space);
          $('#band').val(obj.band);
          $('#domain').val(obj.domain);
          $('#lsp').val(obj.lang);
          $('#mail').val(obj.mail);
          $('#month').val(data[0]['mon_price']);
          $('#annual').val(data[0]['annual_price']);
          $('#sku').val(data[0]['sku']);
          $('#upprod').val(data[0]['prod_id']);
       }
        });
});

//update product

  $(document).on("click",".updateprod",function(){
    id=$('#upprod').val();
    prodcat=$('#aval').val();
    prodname=$('#prodname').val().trim();
    prodlink=$('#prod_link').val().trim();
    webspace=$('#webspace').val().trim();
    band=$('#band').val().trim();
    domain=$('#domain').val().trim();
    lsp=$('#lsp').val().trim();
    mail=$('#mail').val().trim();
    month=$('#month').val().trim();
    annual=$('#annual').val().trim();
    sku=$('#sku').val().trim();
    x="updateProduct";
    $.ajax({
        url: 'Adminaction.php',
        type: 'POST',
        data: {
            ACT: x,Id:id,Catg:prodcat,Pname:prodname,
            Link:prodlink,Web:webspace,
            Band:band,Domain:domain,LSP:lsp,
            Mail:mail,Mon:month,Anu:annual,SKU:sku
        },
        success: function(data) {
            if(data==1){
             alert("updated Successfully");
             window.location.href='viewproduct.php';
            }
        }
  });
});


//delete product
  $(document).on("click",'.delete',function(){
        var id=$(this).data('id');
        var x='MultiProductsdelete';
        var con=confirm("Are you sure want do you want to delete");
        if(con==1){
        $.ajax({
            url: 'Adminaction.php',
            type: 'POST',
            data: {
                ACT: x,Id:id
            },
            success: function(data) {
                if(data==1)
                {   
                alert("Deleted Successfully");
                window.location.href='viewproduct.php';
                }
            }
            });
        }
    
    });
});  
</script>
</div>
</div>
<?php require 'footer.php'?>
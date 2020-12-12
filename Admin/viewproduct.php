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
<?php include_once 'Product.php'?>
<?php require 'header.php'?>
<?php

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
        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
      </ol>
    </nav>
  </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
                </div>
              </div>
            </div>
            </div>
    </div>
  <div class="container-fluid">
    <div id="showdata2" class="mt-4">
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="editproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" class="text-muted h3"  id="exampleModalLongTitle">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body showeditcat">
           <div class="form-group">
            <label class="text-muted h3" for="exampleInputEmail1">Product Name</label>
            <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" value="">
            <label class="text-muted h3"  for="exampleInputEmail1">link</label>
            <input type="text" class="form-control" id="plink" aria-describedby="emailHelp">
            <label class="text-muted h3" for="exampleInputEmail1">Product Available</label>
            <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" value="">
            <label class="text-muted h3" for="exampleInputEmail1">Webspace in GB</label>
            <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" value="">
            <label class="text-muted h3"  for="exampleInputEmail1">Bandwidth in GB</label>
            <input type="text" class="form-control" id="plink" aria-describedby="emailHelp">
            <label class="text-muted h3" for="exampleInputEmail1">Free Domain</label>
            <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" value="">
            <label class="text-muted h3" for="exampleInputEmail1">Language/technology support</label>
            <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" value="">
            <label class="text-muted h3"  for="exampleInputEmail1">Mailbox</label>
            <input type="text" class="form-control" id="plink" aria-describedby="emailHelp">
            <label class="text-muted h3" for="exampleInputEmail1">Month Price</label>
            <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" value="">
            <label class="text-muted h3" for="exampleInputEmail1">Annual Price</label>
            <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" value="">
            <label class="text-muted h3" for="exampleInputEmail1">SKU</label>
            <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" value="">
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">cancel</button>
            <button type="button" class="btn btn-success upcat">Update</button>
          </div>
      </div>
    
    </div>
  </div>
</div>
</div>
</div>
</div>
<?php 'footer.php'?>
<script>
var html="";
$(document).ready(function(){ 
       html+="<table id='tableshow'>";
       html+="<thead class='table table-striped'>";
       html+="<tr>";
       html+="<th>ID</th>";
       html+="<th>Product Parent Id</th>";
       html+="<th>product Name</th>";
       html+="<th>link</th>";
       html+="<th>prod_available</th>";
       html+="<th>product launch date</th>";
       html+="<th>Prod_id</th>";
       html+="<th>Web Space(in GB) *</th>";
       html+="<th>BandWidth (IN GB) *</th>";
       html+="<th>Free Domain *</th>";
       html+="<th>Language/Technology Support</th>";
       html+="<th>Mailbox*</th>";
       html+="<th>Month Price</th>";
       html+="<th>Annual Price</th>";  
       html+="<th>SKU</th>"; 
       html+="<th>Action</th>";  
       html+='</tr>';
       html+="</thead>"; 
  $.ajax({
    url :'Adminaction.php',
    type : 'post',
    dataType  :'json',
    data :{
      ACT:"ShowProductsDesc"
    },
    success : function(data) {
    html+='<tbody>';
    for(var i=0;i<data.length;i++){
      var obj = jQuery.parseJSON(data[i]['description']);
    html+='<tr><td>'+data[i]['id']+'</td><td>'+data[i]['prod_parent_id']+'</td><td>'+data[i]['prod_name']+'</td><td>'+data[i]['link']+'</td>\
    <td>'+data[i]['prod_available']+'</td><td>'+data[i]['prod_launch_date']+'</td><td>'+data[i]['prod_id']+'</td><td>'+obj.web_space+'</td>\
    <td>'+obj.band+'</td><td>'+obj.domain+'</td><td>'+obj.lang+'</td><td>'+obj.mail+'</td><td>'+data[i]['mon_price']+'</td><td>'+data[i]['annual_price']+'</td><td>'+data[i]['sku']+'</td><td>\
    <input type="button"  data-toggle="modal" data-id='+data[i]['prod_id']+' data-target="#editproduct" class="btn btn-info edit" value="edit"><input type="button" value="delete"  data-id='+data[i]['prod_id']+' class="btn btn-danger delete"></td></tr>';
      }
    html+='</tbody>';
    html+='</table>';
     $("#showdata2").html(html);
     $("#tableshow").DataTable();
    }
  });  

  //editproduct

//   $(document).on("click",'.edit',function(){
//     var id=$(this).data('id');
//     alert(id);
//     var x="editCategory";
//     $.ajax({
//         url: 'Adminaction.php',
//         type: 'POST',
//         data: {
//             ACT: x,Id:id
//         },
//         dataType:'json',
//         success: function(data) {
//         }
//         });
// });

//delete product
  $(document).on("click",'.delete',function(){
        var id=$(this).data('id');
        alert(id);
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
 


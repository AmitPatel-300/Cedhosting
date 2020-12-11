<?php include 'header.php';
  include_once 'Product.php';
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
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h3">Select Product Category *</label>  
                  <div class="input-group ">
                  <select class="custom-select" id="aval" id="inputGroupSelect02">
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h3 ">Enter Product Name *</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"  type="text" id="prodname">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h3">Page URL</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"  type="text" id="link">
                  </div>
                </div>
                <hr>
                <div class="text-muted mb-4">
                <small class="h2">Product details</small><br>
                <small class="h4 text-gray ">Enter Product Detail Below</small>
              </div>
              <hr>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h3 ">Enter Monthly Price</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2" placeholder="ex:23"  type="text" id="mprice">
                  </div>
                  <label class="h5 text-gray">This will be Monthly Plan</label>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4">Enter Annual Price</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2" placeholder="ex:23" type="text" id="aprice">
                  </div>
                  <label class="h5 text-gray">This will be Annual Plan</label>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h4">SKU</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"   type="text" id="sku">
                  </div>
                </div>
                <hr>
                <div class="text-center text-muted mb-4">
                <small class="h1">Features</small><br>
              </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h3 ">Web Space(in GB) *</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2" type="text" id="webspace">
                  </div>
                  <label class="h5 text-gray">Enter 0.5 for 512</label>
                </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h3 ">BandWidth (IN GB) *</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2" type="text" id="band">
                  </div>
                  <label class="h5 text-gray">Enter 0.5 for 512</label>
                </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h3  mt-1">Free Domain *</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"  type="text" id="domain">
                  </div>
                  <label class="h5 text-gray">Enter 0 if no domain available in this service</label>
                </div>
                <div class="form-group mt-1">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h3 ">Language/Technology Support</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"  type="text" id="lang">
                  </div>
                  <label class="h5 text-gray">Separate by (,) Ex: PHP, MySQL, MongoDB</label>
                </div>
                <div class="form-group mt-1">
                  <div class="input-group input-group-merge input-group-alternative">
                  <label class="h3">Mailbox*</label>  
                  <div class="input-group ">
                  <input class="form-control pl-2"  type="text" id="mail">
                  </div>
                  <label class="h5 text-gray">Enter Number of mailbox will be provided, enter 0 if none</label>
                </div>
                
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4 addproduct ">Add Product</button>
                </div>
              </form>
            </div>
          </div>
         </div>
           </div>
          <div class="row mt-3">
            
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

<script>
$(document).ready(function(){
  
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
    prodid=$('#aval').val();
    prodname=$('#prodname').val();
    prodlink=$('#link').val();
    monthprice=$('#mprice').val();
    annualprice=$('#aprice').val();
    sku=$('#sku').val();
    webspace=$('#webspace').val();
    band=$('#band').val();
    domain=$('#domain').val();
    lang=$('#lang').val();
    mail=$('#mail').val();
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
    }
  });

    });

  });
</script>
<?php include 'footer.php'?>

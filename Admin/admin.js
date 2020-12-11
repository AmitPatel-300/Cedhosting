
 var html;
$(document).ready(function(){   
    
       html="<table id='tableshow'>";
       html+="<thead class='table table-striped'>";
       html+="<tr>";
       html+="<th>Product Name</th>";
       html+="<th>Product Available</th>";
       html+="<th>link</th>";
       html+="<th>Product launch date</th>";
       html+="<th>Action</th>"
       html+='</tr>';
       html+="</thead>";
        $.ajax({
        url: 'Adminaction.php',
        type: 'POST',
        data: {
            ACT:"showcategory",
        },
        dataType:'json',
        success: function(data) {
            for(var i=0;i<data.length;i++){
                html+='<tbody><tr>';
                html+='<td>'+data[i]['prod_name']+'</td>';
                if(data[i]['prod_available']==1){
                html+='<td>Available</td>';
                }
                else{
                    html+='<td>Not Available</td>';
                }
            html+='<td>'+data[i]['link']+'</td>';
            html+='<td>'+data[i]['prod_launch_date']+'</td>';
            html+='<td><input type="button"  data-toggle="modal" data-id='+data[i]['id']+' data-target="#editcategory" value="edit" class="btn btn-info edit"><input type="button" class="btn btn-danger del" data-id='+data[i]['id']+' value="delete"</td>';
            }
            html+='</tr></tbody>'
            html+='</table>';
            $('#showdata').html(html);
            $('#tableshow').DataTable();
        }
    });

   
    $(document).on("click",'.del',function(){
        var id=$(this).data('id');
        var x='deleteCategory';
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
                window.location.href='category.php';
                }
            }
            });
        }
    
    });

  $('#category').click(function(){
      var name=$('#pn').val();
      var available=$('#aval').val();
      var act="Addcategory";
      $.ajax({
            url: 'Adminaction.php',
            type: 'POST',
            data: {
                ACT:act,
                Name: name,
                Ava: available,
            },
            success: function(data) {
              if(data==1){
                  alert("added successfully");
                  window.location.href='category.php';
              }
            }
        });
  });

  $(document).on("click",'.edit',function(){
    var id=$(this).data('id');
    var x="editCategory";
    $.ajax({
        url: 'Adminaction.php',
        type: 'POST',
        data: {
            ACT: x,Id:id
        },
        dataType:'json',
        success: function(data) {
            for(var i=0;i<data.length;i++) {
            html='<div class="form-group">\
            <label class="text-muted h3" for="exampleInputEmail1">Product Name</label>\
            <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" value="'+data[i]['prod_name']+'"\
            <label class="text-muted h3" for="exampleInputEmail1">Please select</label>\
          <select class="form-control" id="pava">\
            <option value="0">Not  Available</option>\
            <option value="1">Available</option>\
          </select>\
            <label class="text-muted h3"  for="exampleInputEmail1">link</label>\
            <input type="text" class="form-control" id="plink" aria-describedby="emailHelp" value="'+data[i]['link']+'">\
            <div class="modal-footer">\
            <button type="button" class="btn btn-danger" data-dismiss="modal">cancel</button>\
            <button type="button" class="btn btn-success upcat" data-id='+data[i]['id']+'>Update</button>\
          </div>';
            }
            html+='</div>';
              $(".showeditcat").html(html);
        }
        });
});


  $(document).on("click",".upcat",function(){
    var pname=$("#pname").val();
    var aval=$("#pava").val();
    var plink=$("#plink").val();
    var id=$(this).data('id');
    x="updateCategory";
    $.ajax({
        url: 'Adminaction.php',
        type: 'POST',
        data: {
            ACT: x,Id:id,
            Name:pname,Ava:aval,
            Id:id,Link:plink
        },
        success: function(data) {
            if(data==1){
             alert("updated Successfully");
             window.location.href='category.php';
            }
        }
  });
});

});
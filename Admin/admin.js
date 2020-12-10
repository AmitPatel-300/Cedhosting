
 var html;
$(document).ready(function(){
    
       
       html="<table id='tableshow' class='col-md-9 float-right'>";
       html+="<thead class='table table-striped'>";
       html+="<tr>";
       html+="<th>Product Name</th>";
       html+="<th>Product Available</th>";
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
            html+='<td>'+data[i]['prod_launch_date']+'</td>';
            html+='<td><input type="button" value="edit" class="btn btn-info"><input type="button" class="btn btn-danger del" data-id='+data[i]['id']+' value="delete"</td>';
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
});
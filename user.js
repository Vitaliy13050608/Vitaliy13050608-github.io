$(document).ready(function(){
    $('#checkall').change(function () {
       $('.cb-element').prop('checked',this.checked);
    });
    
    $('.cb-element').change(function () {
    if ($('.cb-element:checked').length == $('.cb-element').length){
     $('#checkall').prop('checked',true);
    }
    else {
     $('#checkall').prop('checked',false);
    }
    });
 
    $('.delete_one').click(function(){
       $('#delete_'+$(this).val()).modal('show');
    });
 
    $('.deleteButton').click(function(){
        $('#delete_'+$(this).data('id')).modal('hide');
       let id = $(this).data('id');
       let data = JSON.stringify({ 'id': id});
       
       $.ajax({
          type: "POST",
          data: JSON.parse(data),
          url: 'user_delete.php',
          success: function(){ 
             update_table();
         }  
       });
    });
 
    $('.edit_one').click(function(){
       $('#edit_'+$(this).val()).modal('show');
    });

    $('.saveEdit').click(function(event){
        event.preventDefault();
        let id = $(this).data('id');
        $('#edit_'+id).modal('hide');
        var	firstname = $('#firstname_'+id).val();
        var	lastname = $('#lastname_'+id).val();
        var	activation = $("#activation_"+id+":checked").val();
        var	role = $('#role_'+id).val();
        let data = JSON.stringify({ 'id': id, 'firstname': firstname, 'lastname': lastname, 'activation': activation, 'role': role});
        $.ajax({
            type: "POST",
            data: JSON.parse(data),
            url: "user_edit.php",
            success: function(){
              update_table();
          }  
        });
     });
 
    function update_table()  
    {  
        $.ajax({  
            url: "users_update.php",  
            cache: false,  
            success: function(html){ 
                $("#users").html(html);  
            }  
        });  
    }  
 });
  
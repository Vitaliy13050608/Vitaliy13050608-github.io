$(document).ready(function(){
   update_table();

   $('#ok_top').click(function(){
      let entries = [];
      $('.cb-element:checked').each(function(){
         entries.push(this.id);
      });
      if(entries.length == 0){
         $('#errorEmptyEnrties').modal('show');
      }else{
         let data = JSON.stringify({ 'id': entries});
         if($('#action_top').val() == "delete" ){
            $('#delete_users').modal('show');
         }
         else if($('#action_top').val() == "set_active"){
            $.ajax({
               type: "POST",
               data: JSON.parse(data),
               url: 'user_set_active.php',
               success: function(){ 
                  update_table();
              }  
            });
         }
         else if($('#action_top').val() == "set_not_active"){
            $.ajax({
               type: "POST",
               data: JSON.parse(data),
               url: 'user_set_not_active.php',
               success: function(){ 
                  update_table();
              }  
            });
         }else{
            $('#errorEmptyAction').modal('show');
         }
      }
   });

   $('#ok_down').click(function(){
      let entries = [];
      $('.cb-element:checked').each(function(){
         entries.push(this.id);
      });
      if(entries.length == 0){
         $('#errorEmptyEnrties').modal('show');
      }else{
         let data = JSON.stringify({ 'id': entries});
         if($('#action_down').val() == "delete" ){
            $('#delete_users').modal('show');
         }
         else if($('#action_down').val() == "set_active"){
            $.ajax({
               type: "POST",
               data: JSON.parse(data),
               url: 'user_set_active.php',
               success: function(){ 
                  update_table();
              }  
            });
         }
         else if($('#action_down').val() == "set_not_active"){
            $.ajax({
               type: "POST",
               data: JSON.parse(data),
               url: 'user_set_not_active.php',
               success: function(){ 
                  update_table();
              }  
            });
         }else{
            $('#errorEmptyAction').modal('show');
         }
      }
   });

   $('#deleteUsersButton').click(function(){
      $('#delete_users').modal('hide');
      let entries = [];
      $('.cb-element:checked').each(function(){
         entries.push(this.id);
      });
      let data = JSON.stringify({ 'id': entries});
      $.ajax({
         type: "POST",
         data: JSON.parse(data),
         url: 'user_delete.php',
         success: function(){ 
            update_table();
        }  
      });
   });

   $('.save').click(function(event){
      event.preventDefault();
      $('#add').modal('hide');
      var	firstname = $('#firstname').val();
      var	lastname = $('#lastname').val();
      var	activation = $("#activation:checked").val();
      var	role = $('#role').val();
      let data = JSON.stringify({ 'firstname': firstname, 'lastname': lastname, 'activation': activation, 'role': role});
      $.ajax({
          type: "POST",
          data: JSON.parse(data),
          url: "user_add.php",
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
 
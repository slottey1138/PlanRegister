$(document).ready(function(){
     var i=3;
     $('#add').click(function(){
          i++;
          $('#dynamic_field').append('<tr id="col'+i+'"><td><input type="text" name="name[]"  class="form-control name_list" /></td>');
     });
     $(document).on('click', '.btn_remove', function(){
          var button_id = $(this).attr("id");
          $('#col'+button_id+'').remove();
     });
     $('#submit').click(function(){
          $.ajax({
               url:"name.php",
               method:"POST",
               data:$('#add_name').serialize(),
               success:function(data)
               {
                    alert(data);
                    $('#add_name')[0].reset();
               }
          });
     });
});

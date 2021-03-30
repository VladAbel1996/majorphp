<script>
 if(role === 'online') {
          $( "#status" ).prop( "checked", true );
         }else if (role === 'offline') {
          $( "#status" ).prop( "checked", false );
         }
$(document).ready(function() {
 
  // append values in input field
     $(document).on('click', 'button[data-role = update]', function() {
         var id = $(this).data('id');
         var firstname = $('#delete' +id).children('td[data-target=firstname]').text();
         var lastname = $('#delete' +id).children('td[data-target=lastname]').text();
         var status = $('#input'+id).val(); 
         var role = $('#delete' +id).children('td[data-target=role]').text();
        
        $("#firstname").val(firstname);
        $("#lastname").val(lastname);
        $("#status").val(status);
        $("#role").val(role);
        $("#userId").val(id);
        $('#editmodal').modal('toggle');
     });
    //  getting date from field and update db
    $('#update').click(function() {
       var id = $("#userId").val();
       var firstname = $("#firstname").val();
       var lastname = $("#lastname").val();
       var status = $("#status").val();
       var role = $("#role").val();
     
      
       
       $.ajax({
         url: 'update.php',
         method: 'post',
         data: { 
            firstname: firstname,
            lastname: lastname,
            role: role,
            status: status,
            id: id
         },
         success: function(response) {
            $('#delete' +id).children('td[data-target=firstname]').text(firstname);
            $('#delete' +id).children('td[data-target=lastname]').text(lastname);
              if(status=='online') {
               $('#input' +id).val(status);
               $('#span' +id).css({"background-color": '#00A86B', 'height': '10px', 'width':'10px','display': 'inline-block', 'margin-left': '5px', 'border-radius':'50%' });
              }else if (status=='offline') {
               $('#input' +id).val(status);
               $('#span' +id).css({"background-color": 'grey', 'height': '10px', 'width':'10px','display': 'inline-block', 'margin-left': '5px', 'border-radius':'50%' });
              }
         
          $('#delete' +id).children('td[data-target=role]').text(role);
       
          $('#editmodal').modal('toggle');   
       
               
           }
       });
    });
});
<!-- <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <form id="frm">
  <div class="modal-dialog " >
    <div class="modal-content ">

      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body ">
      <input type="hidden" id="userId" class="form-control">
    
        <div class="form-grop">
          <label>Firstname:</label>
          <input type="text"  name="firstname" id="firstname" class="form-control firstname" placeholder="Enter your name">
        </div>
      </div>
      <div class="modal-body">
        <div class="form-grop">
          <label>Lastname:</label>
          <input type="text"  name="lastname" id="lastname" class="form-control lastname" placeholder="Enter your name">
        </div>
      </div> 
      <div class="modal-body">
      <label class="form-check-label " for="flexSwitchCheckChecked">Status:</label>
        <div class="form-check form-switch">
        <input type='hidden' value='offline'  name='status'>
        <input class="form-check-input status" id="status"  type="checkbox" id="flexSwitchCheckChecked" name='status' value='online' >     
      </div>
      </div>
    <div class="modal-body">
        <div class="form-grop">
          <label>Role:</label>        
          <select name="role" id="role" class="role"  >
              <option  value="admin">admin</option>
              <option selected="selected" value="user">user</option>   
          </select>
        </div>  
  
      </div>
      <div style="color: red; margin-left: 10px; font-size: 16px; font-weight:bold" id="error"></div>
      <div class="modal-footer">
        <button  id="update" type="button" data-dismiss="modal"  class="btn btn-primary">Save</button>
        <button  type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </form>
</div> -->
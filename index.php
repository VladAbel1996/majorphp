 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User managment</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/47c392d60b.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body class='header' style = "background-image: url('img/image.jpg');">


<div class="modal fade" id="deletethis" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         Chose user 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal">Understood</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="chooseaction" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         Chose action
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  data-dismiss="modal">Understood</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <form id="frm">
  <div class="modal-dialog " >
    <div class="modal-content ">

      <!-- Modal Header -->
      <div class="modal-header">
      <h5 class="modal-title" id="static">Add</h5>
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
          <select name="role" id="role" class="role">
              <option  value="admin">admin</option>
              <option selected="selected" value="user">user</option>   
          </select>
        </div>  
  
      </div>
      <div style="color: red; margin-left: 10px; font-size: 16px; font-weight:bold" id="error"></div>
     
      <div class="modal-footer">
        <button  id="save" type="button"  data-dismiss="modal"  class="btn btn-primary">Save</button>
        <button  id="updatedata" style="display: none" type="button"  data-dismiss="modal"  class="btn btn-primary">Update</button>
        <button  type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </form>
</div>


<div class="container">
        <div class="jubotron">
            <div class="card ">
                <h2 style="display:flex; align-item: center; justify-content: center; color: white; font-weight:bold;" class="bg-danger p-3 mb-2 center "> Managmant System for User's </h2>
            </div>
            <div class="card">
               <div class="card-body ">
                 <div style="display: flex;">  
                        <button type="button" class="btn btn-danger" id="insertdata" data-role="add"   data-toggle="modal" data-target="#myModal">
                            Add User
                         </button>                    
                      <form>
                         <select name="select" id='selector' style="background-color: purple; height: 38px; color:white; font-weight: bold; margin:0 5px;" > 
                            <option value="">--Please select--</option>
                            <option value="delete">Delete</option>
                            <option value="setactive">Set active</option>
                            <option value="setunactive">Set unactive</option>
                         </select>
                         <button id="btn_action" type="submit" class="btn btn-danger">OK</button>   
                     </form>
                 </div>
               </div>
                      
          <table id="example" class=" table table-success table-dark mt-3">
                   <thead>
                        <th scope="col"><input type="checkbox" id = "checkAll"  ></th>
                        <th scope="col">Fullname</th>
                        <th scope="col"></th>
                        <th scope="col">Status</th>
                        <th scope="col">Role</th>
                        <th scope="col">action</th>
                    </thead>
               <tbody id="response">
                      <?php
                         include 'db_connection.php';
                         $sql = "SELECT * from `table`";
                        $query_run = mysqli_query($conn, $sql);

                         if($query_run) {
                             foreach($query_run as $row) { ?>
                             

       <tr class="text-info font-weight-bold" id="delete<?php echo $row['id']; ?>">
              <td><input type="checkbox" name="uesr_id[]" class="chk checkitem" value="<?php echo $row['id']; ?>" id ="<?php echo $row['id']; ?>" ></td>
              <td data-target="firstname"><?php echo $row['firstname']; ?></td>
              <td data-target="lastname"><?php echo $row['lastname']; ?></td>
              <td data-target="status"><input type='hidden' id="input<?php echo $row['id']; ?>" value="<?php echo $row['status']; ?>" /><span id="span<?php echo $row['id'];?>" style='background-color:<?php if($row['status']=='online'){ echo '#00A86B';} else if($row['status']=='offline'){ echo "grey";} ?>;  border-radius: 50%;
              display: inline-block;  height: 10px; width: 10px; margin-left: 5px;'></span></td>                                                                                    
              <td data-target="role"><?php echo $row['role']; ?></td>
              <td>
                <button class="btn btn-success"  id="update" data-role="update" type="button" data-id="<?php echo $row['id']; ?>"><i class='fas fa-edit' style='font-size:24px; color: white'></i></button>
                <button type="button" onclick = "deleteRow(<?php echo $row['id']; ?>)" id="delete" class='btn btn-danger deletebtn'><i class='fas fa-trash' style='font-size:24px;color:white'></i></button>
              </td>
        </tr>
  
        <?php
          }
        }
         ?>
                </tbody>
            </table>
          
                   <div class="card-body ">
                 <div style="display: flex;">  
                        <button type="button" id="insertdata" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                            Add User
                         </button>                    
                         <form>
                           <select name="select" id='selectors' style="background-color: purple; height: 38px; color:white; font-weight: bold; margin:0 5px;" > 
                              <option value="">--Please select--</option>
                              <option value="delete">Delete</option>
                              <option value="setactive">Set active</option>
                              <option value="setunactive">Set unactive</option>
                           </select>
                         <button id="btn_actions" type="submit" class="btn btn-danger">OK</button>
                       </form>        
                 </div>
               </div>
<script>

$(document).ready(function(){
 $('#btn_action').click(function (event) {
  event.preventDefault();
   
  var selectedID = [];
$(':checkbox[name="uesr_id[]"]:checked').each (function () {
    selectedID.push(this.id);
});
var selector = $("#selector").val();




if(selectedID.length === 0) {
  $('#deletethis').modal('show');
}else if(selector === '') {
  $('#chooseaction').modal('show');
}
  $.ajax({
    url: 'action.php',
    type: 'post',
    data: {'id': selectedID, 'select': selector},
    dataType: 'JSON',
    success: function(response) {
      var id = response.slice();
     if(selector==='delete') {
      for(var i=0; i < id.length; i++){
        $('#delete' +id[i]).hide(20);       
       }  
      }else if(selector==='setactive') {
        for(var i=0; i < id.length; i++){   
          $('#span' +id[i]).css({"background-color": '#00A86B' });
       } 
      }else if(selector ==='setunactive') {
        for(var i=0; i < id.length; i++){  
          $('#span' +id[i]).css({"background-color": 'gray' });   
       }
      }
      
     }
  })

 });
});
   
    
       
         
       
  
</script>

<script>

$(document).ready(function(){
 $('#btn_actions').click(function (event) {
  event.preventDefault();
   
  var selectedIDs = [];
$(':checkbox[name="uesr_id[]"]:checked').each (function () {
    selectedIDs.push(this.id);  
});

var selector = $("#selectors").val();




if(selectedIDs.length === 0) {
  $('#deletethis').modal('show');
}else if(selector === '') {
  $('#chooseaction').modal('show');
}
  $.ajax({
    url: 'action.php',
    type: 'post',
    data: {'id': selectedIDs, 'select': selector},
    dataType: 'JSON',
    success: function(response) {
      var id = response.slice();
     if(selector==='delete') {
      for(var i=0; i < id.length; i++){
        $('#delete' +id[i]).hide(20);        
       }  
      }else if(selector==='setactive') {
        for(var i=0; i < id.length; i++){
          $('#span' +id[i]).css({"background-color": '#00A86B' });      
       } 
      }else if(selector ==='setunactive') {
        for(var i=0; i < id.length; i++){     
          $('#span' +id[i]).css({"background-color": 'gray' });
          }    
        }   
     }
  })

 });
});
    
</script>

<script>

$(document).ready(function() {
  $(document).on('click', 'button[data-role = update]', function() {
   
         var id = $(this).data('id');
         var firstname = $('#delete' +id).children('td[data-target=firstname]').text();
         var lastname = $('#delete' +id).children('td[data-target=lastname]').text();
         var check = $('#input' +id).val(); 
         if(check === 'online') {
            $( "#status" ).prop( "checked", true );
         }else if (check === 'offline') {
            $( "#status" ).prop( "checked", false );
         }      
         var role = $('#delete' +id).children('td[data-target=role]').text();
        
        $("#firstname").val(firstname);
        $("#lastname").val(lastname);
        $("#role").val(role); 
        $("#userId").val(id);
     
     
       $('#static').text('Edit');
       $('#updatedata').css('display', 'block');
       $('#save').css('display', 'none');
       $('#myModal').modal('toggle');

    $("#updatedata").click(function(){ 

       if (!$("#status").is(":checked")) {
           $('#status').val('offline')
        }  
       if ($("#status").is(":checked")) {
          $('#status').val('online')
       } 
       
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
          $('#myModal').modal('toggle');   
       
               
        }
       });
    });
  });
})
  
 
$("#insertdata").click(function(){ 
              $('#updatedata').css('display', 'none');
              $('#save').css('display', 'block');
              $('#static').text('Add');
              $( "#status" ).prop( "checked", false );
})
</script>

<script>
 $("#checkAll").change(function () {
   $('.checkitem').prop('checked', $(this).prop('checked'))
 })
 $('.checkitem').change(function () {
   if($(this).prop("checked")==false) {
     $('#checkAll').prop('checked', false)
   }
   if($('.checkitem:checked').length == $('.checkitem').length) {
     $('#checkAll').prop('checked', true)
   }
 })
</script>

<script>
$(document).ready(function(){

     $("#save").click(function(){ 
       $.ajax({
        url: "add.php",
        type: "post",
        data: $("#frm").serialize(),
        success: function(data) {
          $('.firstname').val('');
          $('.lastname').val(''); 
          $("#response").append(data);  
         }
       })
     });
  });
  

</script>

<script>

function deleteRow(id) {
    $.ajax({
      type: 'post',
      url: 'delete.php',
      data: {
        delete_id: id
      },
       success: function() {
          $('#delete' +id).hide(20);
      }
    });
  }
</script>


 
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>



</body>
</html>
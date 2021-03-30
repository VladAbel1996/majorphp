<?php 
  include "db_connection.php";


  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $status = $_POST["status"];
  $role = $_POST["role"];


   

  
   

  $sql = "INSERT INTO `table` ( `firstname`, `lastname`, `status`, `role`) VALUES ( '$firstname', '$lastname', '$status', '$role');";
  ?>
  <?php if($conn->query($sql))  { 
    $last_id = $conn->insert_id; 
     ?>
        <tr class="text-info font-weight-bold" id="delete<?php echo $last_id; ?>">
              <td><input type="checkbox" name="uesr_id[]" class="chk checkitem" value="<?php echo $last_id; ?>" id ="<?php echo $last_id; ?>" ></td>
              <td data-target="firstname"><?php echo $firstname; ?></td>
              <td data-target="lastname"><?php echo $lastname; ?></td>

              <td data-target="status"><input type='hidden' id="input<?php echo $last_id ?>" value="<?php echo $status; ?>" /><span id="span<?php  echo $last_id;?>" style='background-color:<?php if($status=='online'){ echo '#00A86B';} else if($status=='offline'){ echo "#808080";} ?>;  border-radius: 50%;
              display: inline-block;  height: 10px; width: 10px; margin-left: 5px;'></span>
              </td>
                                                                                    
              <td data-target="role"><?php echo $role; ?></td>
              <td>
                <button class="btn btn-success" id="update" data-role="update" type="button" data-id="<?php echo $last_id; ?>"><i class='fas fa-edit' style='font-size:24px; color: white'></i></button>
                <button type="button" onclick = "deleteRow(<?php echo $last_id; ?>)" id="delete" class='btn btn-danger deletebtn'><i class='fas fa-trash' style='font-size:24px;color:white'></i></button>
              </td>
        </tr>
   <?php } ?>










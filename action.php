<?php
 include "db_connection.php";

$select = $_POST['select'];
 if(isset($_POST['id'])) { 
    if($select === 'delete') {
    $dataArr = $_POST['id'];
    
    foreach($dataArr as $id) {
        mysqli_query($conn, "DELETE FROM `table` WHERE id = '$id'");
    }
     echo json_encode($dataArr);
    }else if($select === 'setactive') {
        $dataArr = $_POST['id']; 
        foreach($dataArr as $id) {
            mysqli_query($conn, "UPDATE `table` set status = 'online' WHERE id = '$id'");
        }
     echo json_encode($dataArr); 
    }else if($select === 'setunactive') {
        $dataArr = $_POST['id']; 
        foreach($dataArr as $id) {
            mysqli_query($conn, "UPDATE `table` set status = 'offline' WHERE id = '$id'");
        }
     echo json_encode($dataArr); 
    }
     
  }

?>
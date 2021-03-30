<?php 
 include "db_connection.php";


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $status = $_POST['status'];
    $role = $_POST['role'];
    $id = $_POST['id'];

    $sql = "UPDATE `table` SET `firstname` = '$firstname', `lastname` = '$lastname', `status` = '$status', `role` = '$role' WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);
  
 
  

 
 ?> 
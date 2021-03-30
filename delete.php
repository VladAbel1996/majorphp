<?php 
 include "db_connection.php";

 $id = $_POST['delete_id'];
 $sql = "DELETE FROM `table` WHERE id = '$id'";
 $query = mysqli_query($conn, $sql);
 ?> 
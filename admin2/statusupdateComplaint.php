<?php
  require_once 'connect.php';
  for($i=1;$i<=$_POST["hdnLine"];$i++){
    $status = $_POST["status$i"];
    $id = $_POST["hdnID$i"];

    $sql = "UPDATE `complaintform` SET `status` = $status WHERE `complaintform`.`complaintform_id` = $id";
    $data = mysqli_query($conn,$sql);
  }
 ?>

<?php
  require_once 'connect.php';
  for($i=1;$i<=$_POST["hdnLine"];$i++){
    $unit = $_POST["unit$i"];
    $id = $_POST["hdnID$i"];

    $sql = "UPDATE `complaintform` SET `responsible` = $unit WHERE `complaintform`.`complaintform_id` = $id";
    $data = mysqli_query($conn,$sql);
  }
 ?>

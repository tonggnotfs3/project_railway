<?php
  require_once 'connect.php';
  for($i=1;$i<=$_POST["hdnLine"];$i++){
    $unit = $_POST["unit$i"];
    $id = $_POST["hdnID$i"];

    $sql = "UPDATE `sugform` SET `responsible` = $unit WHERE `sugform`.`sug_id` = $id";
    $data = mysqli_query($conn,$sql);
  }
 ?>

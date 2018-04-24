<?php
  require_once 'connect.php';
  for($i=1;$i<=$_POST["hdnLine"];$i++){
    $unit = $_POST["unit$i"];
    $id = $_POST["hdnID$i"];

    $sql = "UPDATE `dagerform` SET `responsible` = $unit WHERE `dagerform`.`dager_id` = $id";
    $data = mysqli_query($conn,$sql);
  }
 ?>

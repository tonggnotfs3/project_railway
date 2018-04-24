<?php
  require_once 'connect.php';
  for($i=1;$i<=$_POST["hdnLine"];$i++){
    $status = $_POST["status$i"];
    $id = $_POST["hdnID$i"];

    $sql = "UPDATE `dagerform` SET `status` = $status WHERE `dagerform`.`dager_id` = $id";
    $data = mysqli_query($conn,$sql);
  }
 ?>

<?php

$conn = new mysqli("localhost","root","","project_railway");
if ($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}
$conn->query("SET NAMES UTF8");

?>

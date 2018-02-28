<?php
$conn = new mysqli("localhost","root","","project_railway");
if ($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}
$conn->query("SET NAMES UTF8");
$username = $_POST['username'];
$idcard = $_POST['idcard'];
$address = $_POST['address'];
$province = $_POST['province'];
$amphur = $_POST['amphur'];
$districts = $_POST['districts'];
$tel = $_POST['tel'];
$email = $_POST['email'];
  $detail = $_POST['detail'];

		$sql = "INSERT INTO `dagerform` (`name_dager`, `idcard`, `address_dager`, `province_id`, `distrocts_id`, `amphur_id`, `tel_dager`, `detail_dager`, `dager_status`, `email_dager`) VALUES ('$username', '$idcard', '$address', '$province', '$districts', '$amphur', '$tel','$detail','1', '$email');";
		$data = mysqli_query($conn,$sql);


?>

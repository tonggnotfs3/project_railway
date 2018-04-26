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

		$sql = "INSERT INTO `admireform` (`name_admire`, `idcard_admire`, `address_admire`, `province_id`, `districts_id`, `amphur_id`, `tel_admire`, `detail_admire`, `email_admire`, `status`) VALUES ('$username', '$idcard', '$address', '$province', '$districts', '$amphur', '$tel','$detail','$email', '0');";
		$data = mysqli_query($conn,$sql);


?>

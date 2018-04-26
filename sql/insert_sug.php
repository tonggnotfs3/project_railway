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

		$sql = "INSERT INTO `sugform` (`name_sug`, `idcard_sug`, `address_sug`, `province_sug`, `districts_sug`, `amphur_sug`, `tel_sug`, `email_sug`, `detail_sug`, `status`) VALUES ('$username', '$idcard', '$address', '$province', '$districts', '$amphur', '$tel','$email','$detail', '0');";
		$data = mysqli_query($conn,$sql);


?>

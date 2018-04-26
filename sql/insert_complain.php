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
$complainttype = $_POST['complainttype'];
$service = $_POST['service'];
$detail = $_POST['detail'];

		$sql = "INSERT INTO `complaintform` (`complaint_name`, `personal_id`, `address`, `province_id`, `districts_id`, `amphur_id`, `email`,`tel`, `complainttype_id`, `service_id`, `description`,`status`) VALUES ('$username', '$idcard', '$address', '$province', '$districts', '$amphur', '$email','$tel','$complainttype', '$service', '$detail', '0');";
		$data = mysqli_query($conn,$sql);


?>

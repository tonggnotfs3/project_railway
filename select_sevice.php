	<?php include_once("connect.php");
	$complainttype_id = isset($_POST['complainttypeID'])?
	$_POST['complainttypeID']:"";
	$sql = "SELECT * FROM service where complaint_id='$complainttype_id' order by service_code";
	echo $sql;
	$result = mysqli_query($conn, $sql);
	$num_row = mysqli_num_rows($result);
	echo "<option>เลือกหัวข้อการร้องเรียน</option>";
	while($row=$result->fetch_assoc()){
		echo"<option value=\"".$row['service_id']."\">".$row['service_code']."</option>";
			} ?>

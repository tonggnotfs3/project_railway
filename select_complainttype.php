	<?php include_once("connect.php");
	$sql = "SELECT * FROM complainttype order by complaint_code";
	$result = mysqli_query($conn, $sql);
	$num_row = mysqli_num_rows($result);
	echo "<option>เลือกประเภทการร้องเรียน</option>";
	while($row=$result->fetch_assoc()){
		echo"<option value=\"".$row['complainttype_id']."\">".$row['complaint_code']."</option>";
			}
echo $result;
			?>

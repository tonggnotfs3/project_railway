<select id="status<?=$i;?>" name="status<?=$i;?>">
  <option value="0" <?php if($row['status'] == 0){
    echo "selected";
  } ?>>ยังไม่ได้ดำเนินการ
  </option>
  <option value="1" <?php if($row['status'] == 1){
    echo "selected";
  } ?>>ดำเดินการเสร็จสิ้นแล้ว
  </option>
</select>

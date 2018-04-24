<select id="status<?=$i;?>" name="status<?=$i;?>">
  <option value="0" <?php if($row['responsible'] == 1){
    echo "selected";
  } ?>>ยังไม่ได้ดำเนินการ
  </option>
  <option value="1" <?php if($row['responsible'] == 2){
    echo "selected";
  } ?>>ดำเดินการเสร็จสิ้นแล้ว
  </option>
</select>

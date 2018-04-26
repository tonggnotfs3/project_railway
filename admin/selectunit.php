<select id="unit<?=$i;?>" name="unit<?=$i;?>">
  <option value="0" <?php if($row['responsible'] == 0){
    echo "selected";
  } ?>>เลือกหน่วยงาน
  </option>
  <option value="1" <?php if($row['responsible'] == 1){
    echo "selected";
  } ?>>หน่วยงาน 1
  </option>
  <option value="2" <?php if($row['responsible'] == 2){
    echo "selected";
  } ?>>หน่วยงาน 2
  </option>
  <option value="3" <?php if($row['responsible'] == 3){
    echo "selected";
  } ?>>หน่วยงาน 3
  </option>
</select>

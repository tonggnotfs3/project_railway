<style type="text/css">
  .side-bar-active{
    background-color: #f6eacf;
    color:#f6eacf;
  }
</style>
<!-- <script type="text/javascript">
function loadDoc0() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "complaintnaja.html", true);
  xhttp.send();

}
function loadDoc1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "recommend.html", true);
  xhttp.send();

}
function loadDoc2() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "danger.html", true);
  xhttp.send();

}
function loadDoc3() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "admire.html", true);
  xhttp.send();

}
function loadDoc4() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "followup.html", true);
  xhttp.send();

}
</script> -->
<div class="list-group">
  <a href="#" class="list-group-item active list-group-item-warning">ประเภท</a>
  <a data-toggle="collapse" href="#collapse1"  class="list-group-item"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;ข้อมูลที่ที่ยังไม่ได้จัดประเภท</a>
    <div id="collapse1" class="panel-collapse collapse">
      <a href="display_complain_admin.php"  class="list-group-item"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;ร้องเรียน-ร้องทุกข์</a>
      <a href="display_sug_admin.php"  class="list-group-item"><span class="glyphicon glyphicon-pencil"></span>&nbsp;แนะนำ</a>
      <a href="display_danger_admin.php"  class="list-group-item"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;แจ้งแหตุอันตราย</a>
      <a href="display_admire_admin.php"  class="list-group-item"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;ชื่นชม</a>
    </div>


  <a data-toggle="collapse" href="#collapse2"  class="list-group-item"><span class="glyphicon glyphicon-pencil"></span>&nbsp;ข้อมูลแยกตามหน่วยงาน</a>
  <div id="collapse2" class="panel-collapse collapse">
    <a data-toggle="collapse" href="#collapse21"  class="list-group-item"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;หน่วยงานที่ 1</a>
      <div id="collapse21" class="panel-collapse collapse">
        <a href="unit_display_complain_admin.php?responsible=1"  class="list-group-item"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;ร้องเรียน-ร้องทุกข์</a>
        <a href="unit_display_sug_admin.php?responsible=1"  class="list-group-item"><span class="glyphicon glyphicon-pencil"></span>&nbsp;แนะนำ</a>
        <a href="unit_display_danger_admin.php?responsible=1"  class="list-group-item"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;แจ้งแหตุอันตราย</a>
        <a href="unit_display_admire_admin.php?responsible=1"  class="list-group-item"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;ชื่นชม</a>
      </div>
    <a data-toggle="collapse" href="#collapse22"  class="list-group-item"><span class="glyphicon glyphicon-pencil"></span>&nbsp;หน่วยงานที่ 2</a>
      <div id="collapse22" class="panel-collapse collapse">
        <a href="unit_display_complain_admin.php?responsible=2"  class="list-group-item"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;ร้องเรียน-ร้องทุกข์</a>
        <a href="unit_display_sug_admin.php?responsible=2"  class="list-group-item"><span class="glyphicon glyphicon-pencil"></span>&nbsp;แนะนำ</a>
        <a href="unit_display_danger_admin.php?responsible=2"  class="list-group-item"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;แจ้งแหตุอันตราย</a>
        <a href="unit_display_admire_admin.php?responsible=2"  class="list-group-item"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;ชื่นชม</a>
      </div>
    <a data-toggle="collapse" href="#collapse23"  class="list-group-item"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;หน่วยงานที่ 3</a>
      <div id="collapse23" class="panel-collapse collapse">
        <a href="unit_display_complain_admin.php?responsible=3"  class="list-group-item"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;ร้องเรียน-ร้องทุกข์</a>
        <a href="unit_display_sug_admin.php?responsible=3"  class="list-group-item"><span class="glyphicon glyphicon-pencil"></span>&nbsp;แนะนำ</a>
        <a href="unit_display_danger_admin.php?responsible=3"  class="list-group-item"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;แจ้งแหตุอันตราย</a>
        <a href="unit_display_admire_admin.php?responsible=3"  class="list-group-item"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;ชื่นชม</a>
      </div>
  </div>


  <a data-toggle="collapse" href="#collapse3"  class="list-group-item"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;ข้อมูลที่ได้รับการจัดการแล้ว</a>
  <div id="collapse3" class="panel-collapse collapse">
    <a href="display_complain_admin.php"  class="list-group-item"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;ร้องเรียน-ร้องทุกข์</a>
    <a href="display_sug_admin.php"  class="list-group-item"><span class="glyphicon glyphicon-pencil"></span>&nbsp;แนะนำ</a>
    <a href="display_danger_admin.php"  class="list-group-item"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;แจ้งแหตุอันตราย</a>
    <a href="display_admire_admin.php"  class="list-group-item"><span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;ชื่นชม</a>
  </div>
</div>

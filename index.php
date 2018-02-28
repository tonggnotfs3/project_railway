<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="asset\css\bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="asset/js/jquery-3.2.1.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
    $(document).ready(function() {
      function selectProvince() {
        $.ajax({
          type: "POST",
          url: "select_province.php",
          success: function(data) {
            $("#province").html(data);
          }
        });
      }
      $('#province').change(function() {
        $.ajax({

          type: "POST",
          data: {
            provinceID: $(this).val()
          },
          url: "select_amphur.php",
          success: function(data) {
            $("#amphur").html(data);
          }
          /*,
              error:function(jqXHR,text,error){
                //แสดงข้อผิดพลาด
                $('#results').html(error);
              }*/
        });

      });
      $('#amphur').change(function() {

        $.ajax({

          type: "POST",
          data: {
            amphurID: $(this).val()
          },
          url: "select_districts.php",
          success: function(data) {
            $("#districts").html(data);
          }
          /*,
              error:function(jqXHR,text,error){
                //แสดงข้อผิดพลาด
                $('#results').html(error);
              }*/
        });

      });

      function selectcomplainttype() {
        $.ajax({
          type: "POST",
          url: "select_complainttype.php",
          success: function(data) {
            $("#complainttype").html(data);
          }
        });
      }
      selectcomplainttype();

      $('#amphur').change(function() {

        $.ajax({

          type: "POST",
          data: {
            amphurID: $(this).val()
          },
          url: "select_districts.php",
          success: function(data) {
            $("#districts").html(data);
          }
          /*,
              error:function(jqXHR,text,error){
                //แสดงข้อผิดพลาด
                $('#results').html(error);
              }*/
        });

      });

    });
        /*function loadDoc() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("demo").innerHTML =
              this.responseText;
            }
          };
          xhttp.open("GET", "complaint.php", true);
          xhttp.send();
        }*/
    </script>

  </head>
  <body>
    <?php include("menu.php"); ?>
    <div class="container">
      <div class="col-md-3"><?php include("side-menu.php"); ?></div>
      <div  id="demo" class="col-md-9">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="panel-title">
              <h4><span  aria-hidden="true"></span>ข้อมูลผู้ร้องเรียน</h4>
            </div>
          </div>
          <div class="panel-body">
            <h4>วัตถุประสงค์</h4>
            <p style="text-indent: 2.5em;">การเปิดให้บริการร้องทุกข์ - ร้องเรียนทางอินเตอร์เน็ต เป็นช่องทางให้ผู้โดยสารและผู้ใช้บริการของการรถไฟแห่งประเทศไทย สามารถร้องทุกข์ - ร้องเรียนมายังหน่วยงานฯ ได้โดยตรง เพื่อความรวดเร็วในการรับทราบปัญหา และสามารถนำไปดำเนินการได้อย่างรวดเร็ว ดังต่อไปนี้</p>
            <h4>หลักเกณฑ์การร้องทุกข์ - ร้องเรียน</h4>
            <p style="text-indent: 2.5em;">เรื่องที่อาจนำมาร้องทุกข์ - ร้องเรียนได้ ต้องเป็นเรื่องที่ผู้ร้องได้รับความเดือดร้อน หรือเสียหาย อันเนื่องมาจากเจ้าหน้าที่หรือหน่วยงานในสังกัด ในเรื่องดังต่อไปนี้</p>
            <p style="text-indent: 2.5em;">1. เรื่องที่ร้องทุกข์ - ร้องเรียน ต้องเป็นเรื่องจริงที่มีมูลเหตุ มิได้หวังสร้างความเสียหายต่อบุคคลอื่น</p>
            <p style="text-indent: 2.5em;">2. การใช้บริการร้องทุกข์ - ร้องเรียน ทางหน่วยงานต้องสามารถติดต่อกลับไปยังผู้ใช้บริการได้ เพื่อยืนยันว่ามีตัวตนจริง</p>
            <h4>วิธีการยื่นคำร้องทุกข์ - ร้องเรียน</h4>
            <p style="text-indent: 2.5em;">1. ใช้ถ้อยคำสุภาพ และมีวัน เดือน ปี ชื่อ และที่อยู่ ของผู้ร้องเรียน – ร้องทุกข์ ข้อเท็จจริง หรือพฤติการณ์ของเรื่องที่ร้องเรียน - ร้องทุกข์ ได้อย่างชัดเจนว่าได้รับความเดือดร้อน หรือเสียหายอย่างไร ต้องการให้แก้ไข ดำเนินการอย่างไร หรือ ชี้ช่องทางแจ้งเบาะแส เกี่ยวกับการทุจริตของเจ้าหน้าที่ - หน่วยงานของการรถไฟแห่งประเทศไทยได้ชัดแจ้งเพียงพอที่สามารถดำเนินการ สืบสวน สอบสวนได้ ระบุ พยาน เอกสาร พยานวัตถุ และพยานบุคคล (ถ้ามี)</p>
            <p style="text-indent: 2.5em;">2. คำร้องทุกข์ - ร้องเรียน อาจส่งทางไปรษณีย์ไปหน่วยงาน หรือส่งช่องทาง Website ของหน่วยงานได้</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

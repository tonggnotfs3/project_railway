<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ข้อมูลแจ้งเหตุอันตราย</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../asset\css\bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="../asset/js/jquery-3.2.1.min.js"></script>
  <script src="../asset/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css" />
  <script type="text/javascript" src="../DataTables/datatables.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <?php
    include("menu.php");
    require_once 'connect.php';
    $sql="SELECT dagerform.name_dager, dagerform.idcard,dagerform.address_dager,province.PROVINCE_NAME,amphur.AMPHUR_NAME,districts.DISTRICT_NAME,dagerform.tel_dager,dagerform.detail_dager,dagerform.email_dager,dagerform.dager_id,dagerform.responsible,dagerform.status FROM dagerform,province,districts,amphur WHERE province.PROVINCE_ID = dagerform.province_id AND amphur.AMPHUR_ID = dagerform.amphur_id AND districts.DISTRICT_ID = dagerform.distrocts_id AND dagerform.status = 1 AND dagerform.responsible !=0";
    $result=$conn->query($sql);
    ?>
    <div class="container">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="panel-title">
              <h4><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>ข้อมูลแจ้งเหตุอันตราย</h4>
            </div>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <form name="changdanger" id="changdanger">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ชื่อ นามสกุล</th>
                    <th>เลขที่บัตรประชาชน</th>
                    <th>ที่อยู่</th>
                    <th>จังหวัด</th>
                    <th>อำเภอ</th>
                    <th>ตำบล</th>
                    <th>เบอร์โทร</th>
                    <th>E-mail</th>
                    <th>ลายละเอียด</th>
                    <th>หน่วยงานที่เกียวข้อง</th>
                    <th>สถานะ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i =0;
                  while($row=$result->fetch_assoc()){
                  $i = $i + 1;
                  ?>
                  <tr>
                    <td>
                      <input type="hidden" name="hdnID<?=$i;?>" size="5" value="<?=$row['dager_id'];?>">
                      <?php echo $row['name_dager'];?>
                    </td>
                    <td>
                      <?php echo $row['idcard'];?>
                    </td>
                    <td>
                      <?php echo $row['address_dager'];?>
                    </td>
                    <td>
                      <?php echo $row['PROVINCE_NAME'];?>
                    </td>
                    <td>
                      <?php echo $row['AMPHUR_NAME'];?>
                    </td>
                    <td>
                      <?php echo $row['DISTRICT_NAME'];?>
                    </td>
                    <td>
                      <?php echo $row['tel_dager'];?>
                    </td>
                    <td>
                      <?php echo $row['email_dager'];?>
                    </td>
                    <td>
                      <?php echo $row['detail_dager'];?>
                    </td>
                    <td>
                      <?php require 'selectunit.php'; ?>
                    </td>
                    <td>
                      <?php require 'selectStatus.php'; ?>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>

              </table>
              <div align="right"><button align="" type="submit" class="btn btn-default">บันทึก</button></div>
              <input type="hidden" name="hdnLine" value="<?=$i;?>">
            </form>
            </div>

          </div>
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function() {
        $('.table').DataTable({
          ordering: false,
          "language": {
            "lengthMenu": "แสดง _MENU_ เรคคอร์ดต่อหนึ่งหน้า",
            "zeroRecords": "ไม่พบการค้นหา",
            "info": "หน้าที่ _PAGE_ จาก _PAGES_",
            "infoEmpty": "ไม่พบข้อมูล",
            "infoFiltered": "(กรองจาก _MAX_  เรคคอร์ด)",
            "paginate": {
              "first": "หน้าแรก",
              "last": "หน้าสุดท้าย",
              "next": "ถัดไป",
              "previous": "ก่อนหน้า"
            },
            "search": "ค้นหา:"
          }
        });
      });

      $(document).ready(function () {
             $('#changdanger').submit(function() {
              var fData = new FormData(document.getElementById("changdanger"));
               $.ajax({
        'type':"POST",
        'url':"updateDanger.php",
        'data':fData,
        'contentType':false,
        'processData':false,
        'cache':false,
        'success':function(data) {
          alert("success");
        },
        'error':function(jqXHR,text,error) { alert(error); }
      });
      return false;

            });
        });
    </script>
</body>

</html>

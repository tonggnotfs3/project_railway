<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ข้อมูลคำแนะนำ</title>

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
  $sql="SELECT admireform.name_admire,admireform.idcard_admire,admireform.address_admire, admireform.tel_admire,admireform.detail_admire,admireform.email_admire,province.PROVINCE_NAME,districts.DISTRICT_NAME, amphur.AMPHUR_NAME FROM admireform,amphur,districts,province WHERE admireform.province_id = province.PROVINCE_ID AND admireform.districts_id = districts.DISTRICT_ID AND amphur.AMPHUR_ID = admireform.amphur_id";
  $result=$conn->query($sql);
  ?>
  <div class="container">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
            <h4><span class="glyphicon glyphicon-th-list
              " aria-hidden="true"></span> ข้อมูลคำแนะนำ</h4>
            </div>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
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
                  </tr>
                </thead>
                <tbody>
                  <?php while($row=$result->fetch_assoc()){?>
                    <tr>
                      <td>
                        <?php echo $row['name_admire'];?>
                      </td>
                      <td>
                        <?php echo $row['idcard_admire'];?>
                      </td>
                      <td>
                        <?php echo $row['address_admire'];?>
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
                        <?php echo $row['tel_admire'];?>
                      </td>
                      <td>
                        <?php echo $row['email_admire'];?>
                      </td>
                      <td>
                        <?php echo $row['detail_admire'];?>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>

              </table>
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
    </script>
  </body>

  </html>

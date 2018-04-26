<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>แนะนำ</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="asset\css\bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
      selectProvince();
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

      $('#complainttype').change(function() {

        $.ajax({

          type: "POST",
          data: {
            complainttypeID: $(this).val()
          },
          url: "select_sevice.php",
          success: function(data) {
            $("#service").html(data);
          }
          /*,
              error:function(jqXHR,text,error){
                //แสดงข้อผิดพลาด
                $('#results').html(error);
              }*/
        });

      });

    });

    function ismaxlength(obj) {
      var mlength = obj.getAttribute ? parseInt(obj.getAttribute("maxlength")) : ""
      if (obj.getAttribute && obj.value.length > mlength)
        obj.value = obj.value.substring(0, mlength)

    }
  </script>

</head>

<body>
  <?php include("menu.php"); ?>
  <div class="container">
    <div class="col-md-3">
      <?php include("side-menu.php"); ?>
    </div>
    <div id="demo" class="col-md-9">
      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title">
            <h4><span class="glyphicon glyphicon-pencil"  aria-hidden="true"></span>&nbsp;แนะนำ</h4>
          </div>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" id="sugform">
            <div class="form-group">
              <label class="control-label col-sm-3" for="username">ขื่อ นามสกุล:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="username" id="username">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="username">เลขที่บัตรประชาชน:</label>
              <div class="col-sm-4">
                <input maxlength="13" onkeyup="return ismaxlength(this)" type="number" class="form-control" name="idcard" id="idcard">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="username">ที่อยู่ บ้านเลขที่:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="address" id="address">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="province">จังหวัด:</label>
              <div class="col-md-4">
                <select class="form-control" id="province" name="province">
         </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="amphur">อำเภอ:</label>
              <div class="col-md-4">
                <select class="form-control" id="amphur" name="amphur">
         </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="districts">ต่ำบล:</label>
              <div class="col-md-4">
                <select class="form-control" id="districts" name="districts">
         </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="username">เบอร์โทร:</label>
              <div class="col-sm-4">
                <input maxlength="10" onkeyup="return ismaxlength(this)" type="number" class="form-control" name="tel" id="tel">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="username">E-mail:</label>
              <div class="col-sm-4">
                <input type="email" class="form-control" name="email" id="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="service">ลายละเอียด:</label>
              <div class="col-md-4">
                <textarea class="form-control" id="detail" name="detail">
            </textarea >
            </div>
            </div>

          <div class="col-sm-2">
          </div>
           <div class="col-sm-4">
          <button type="submit" class="btn btn-default">เพิ่มข้อมูล</button>
          </div>
        </form>

          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function () {
           $('#sugform').submit(function() {
            var fData = new FormData(document.getElementById("sugform"));
             $.ajax({
      'type':"POST",
      'url':"sql/insert_sug.php",
      'data':fData,
      'contentType':false,
      'processData':false,
      'cache':false,
      'success':function(data) {
        // window.location="display_sug.php";
        alert("success");
        location.reload();
      },
      'error':function(jqXHR,text,error) { alert(error); }
    });
    return false;

          });
      });


    </script>

  </body>
</html>

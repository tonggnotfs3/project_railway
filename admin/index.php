<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

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

    <?php
      require_once 'connect.php';

      $sql1 = "SELECT COUNT(*) c FROM admireform";
      $result1=$conn->query($sql1);
      $row1=$result1->fetch_assoc();


      $sql2 = "SELECT COUNT(*) c FROM complaintform";
      $result2=$conn->query($sql2);
      $row2=$result2->fetch_assoc();


      $sql4 = "SELECT COUNT(*) c FROM sugform";
      $result4=$conn->query($sql4);
      $row4=$result4->fetch_assoc();


      $sql3 = "SELECT COUNT(*) c FROM dagerform";
      $result3=$conn->query($sql3);
      $row3=$result3->fetch_assoc();

    ?>
  </head>
  <body>
    <?php include("menu.php"); ?>
    <div class="container">
      <div class="col-md-3"><?php include("side-menu-admin-index.php"); ?></div>
      <div  id="demo" class="col-md-9">
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-warning p-20">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                        </div>
                        <div class="media-body media-text-right">
                            <h2 class="color-white"><?php echo $row2['c']; ?></h2>
                            <p class="m-b-0">เรื่องร้องเรียน</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info p-20">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                        </div>
                        <div class="media-body media-text-right">
                            <h2 class="color-white"><?php echo $row4['c']; ?></h2>
                            <p class="m-b-0">คำแนะนำ</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success p-20">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                        </div>
                        <div class="media-body media-text-right">
                            <h2 class="color-white"><?php echo $row3['c']; ?></h2>
                            <p class="m-b-0">การแจ้งเหตุอัตราย</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger p-20">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                        </div>
                        <div class="media-body media-text-right">
                            <h2 class="color-white"><?php echo $row1['c']; ?></h2>
                            <p class="m-b-0">คำชื่นชม</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>

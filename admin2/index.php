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
      require_once '../connect.php';

    ?>
  </head>
  <body>
    <?php include("menu.php"); ?>
    <div class="container">
      <div class="col-md-3"><?php include("../side-menu.php"); ?></div>
      <div  id="demo" class="col-md-9">
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-warning p-20">
                    <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                        </div>
                        <div class="media-body media-text-right">
                            <h2 class="color-white">278</h2>
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
                            <h2 class="color-white">278</h2>
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
                            <h2 class="color-white">$27647</h2>
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
                            <h2 class="color-white">278</h2>
                            <p class="m-b-0">คำชื่อชำ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>

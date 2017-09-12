<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

     <!-- Bootstrap -->
     <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
     <!-- Font Awesome -->
     <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
     <!-- NProgress -->
     <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- include tabbar  -->
        <?php include('tab_bar_view.php') ?>
        <!-- /include tabbar  --> 

         <!-- page content -->
         <div class="right_col" role="main">
         <div class="row">
            <div class="col-md-11 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                <div class="row">
                  <div class="col-md-11 col-sm-10 col-xs-10">
                    <h3>Pay slip</h3>
                  </div>
                  <div class="col-md-1 col-sm-1 col-xs-1">
                      <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>                         
                  </div>
                </div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <section class="content invoice">
                    <!-- title row -->
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 ">
                      <h3>
                          <i class="fa fa-globe"></i> บริษัท เจฟเฟอร์ เรสโตรองต์ จำกัด.
                          <small class="pull-right">วันที่พิมพ์: <?php echo date('d/m/Y H:i:s');?></small>
                      </h3>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                      <div class="col-md-4 col-sm-5 invoice-col">
                        <address>
                          <br>รหัสพนักงาน: <?php echo $employee[0]['emp_id'];?>
                          <br>แผนก: แหลมทองบางแสน
                          <br>ตำแหน่ง: <?php echo $employee[0]['rank'];?>
                      </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-4 col-sm-4 invoice-col">
                        <address>
                          <br>ชื่อ-นามสกุล: <?php echo $employee[0]['full_name'];?>
                          <br>ประเภทพนักงาน: <?php echo $employee[0]['type'];?>
                          <br>บัชชีธนาคาร: <?php echo $employee[0]['account'];?> ไทยพาณิชย์ 
                      </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-4 invoice-col">
                        <address>
                          <br>งวดวันที่: <?php echo $salary[0]['date'];?>
                        </address>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                      <div class="col-md-6 col-xs-12 ">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>รายการได้</th>
                              <th></th>
                              <th>จำนวนเงิน</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>เงินเดือน</td>
                              <td>455-981-221</td>
                              <?php echo "<TD>" .$salary[0]['total']. "</TD>";?>
                            </tr>
                            <tr>
                              <td>OT 1.5</td>
                              <td>247-925-726</td>
                              <?php echo "<TD>" .$salary[0]['ot1']. "</TD>";?>
                            </tr>
                            <tr>
                              <td>OT 2</td>
                              <td>735-845-642</td>
                              <?php echo "<TD>" .$salary[0]['ot2']. "</TD>";?>
                            </tr>
                            <tr>
                              <td>ค่าตำแหน่ง</td>
                              <td>735-845-642</td>
                              <td>$10.70</td>
                            </tr>
                            <tr>
                              <td>เงินได้จากหน้าที่</td>
                              <td>422-568-642</td>
                              <?php echo "<TD>" .$salary[0]['income']. "</TD>";?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-6 col-xs-12 ">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>รายการหัก</th>
                              <th></th>
                              <th>จำนวนเงิน</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>ลาเกินสิทธิ์</td>
                              <td>455-981-221</td>
                              <td>$64.50</td>
                            </tr>
                            <tr>
                              <td>สาย</td>
                              <td>247-925-726</td>
                              <td>$50.00</td>
                            </tr>
                            <tr>
                              <td>สวัสดิการพนักงาน</td>
                              <td>735-845-642</td>
                              <td>$10.70</td>
                            </tr>
                            <tr>
                              <td>ประกันสังคม</td>
                              <td>735-845-642</td>
                              <?php echo "<TD>" .$salary[0]['insurance']. "</TD>";?>
                            </tr>
                            <tr>
                              <td>อื่นๆ</td>
                              <td>422-568-642</td>
                              <?php echo "<TD>" .$salary[0]['mulct']. "</TD>";?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                      <!-- accepted payments column -->
                      <div class="col-md-6 col-ms-6 col-xs-6">                     
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6 col-ms-6 col-xs-6">
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <th style="width:50%">รวมรายการได้:</th>
                                <td>$250.30</td>
                              </tr>
                              <tr>
                              <tr>
                                <th>รวมรายการหัก:</th>
                                <td>$250.30</td>
                              </tr>
                              <tr>
                                <th>ภาษี (7%):</th>
                                <td>$10.34</td>
                              </tr>
                              <tr>
                                <th>รวมทั้งหมด:</th>
                                <td>$265.24</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    
                  </section>
                </div>
              </div>
            </div>
         </div>
       </div>
       <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

     <!-- jQuery -->
     <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
     <!-- Bootstrap -->
     <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
     <!-- FastClick -->
     <script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js')?>"></script>
     <!-- NProgress -->
     <script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js')?>"></script>
	
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pay slip</title>

     <!-- Bootstrap -->
     <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
     <!-- Font Awesome -->
     <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
     <!-- NProgress -->
     <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">
    <style type="text/css">
      @media print
      {
      body * { visibility: hidden; }
      #page * {visibility: visible; }
      #print * {visibility: hidden; }
    }
</style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- include tabbar  -->
        <?php include('tab_bar_view.php') ?>
        <!-- /include tabbar  --> 

         <!-- page content -->
        <div class="right_col" role="main">
          <div id="page" class="row">
            <div class="col-md-11 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                <div class="row">
                  <div class="col-md-11 col-sm-11 col-xs-11">
                    <h3>ใบจ่ายเงินเดือน</h3>
                  </div>
                  <div id="print" class="col-md-1 col-sm-1 col-xs-1">
                      <button class="btn btn-default pull-right" onclick="window.print('page');"><i class="fa fa-print"></i> Print</button>                                             
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <p class="pull-right">วันที่พิมพ์: <?php date_default_timezone_set('Asia/Bangkok');?> <?php echo date('d/m/Y h:i:s a');?></p>
                  </div>
                </div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <section class="content invoice">
                    <!-- title row -->
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <h3 class="text-center"><i class="fa fa-globe"></i> บริษัท เจฟเฟอร์ เรสโตรองต์ จำกัด.</h3>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                      <div class="col-md-4 col-sm-4 col-xs-4 invoice-col">
                        <address>
                          <br>รหัสพนักงาน: <?php echo $employee[0]['emp_id'];?>
                          <br>แผนก: แหลมทองบางแสน
                          <br>ตำแหน่ง: <?php echo $employee[0]['rank'];?>
                      </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-4 col-sm-4 col-xs-5 invoice-col">
                        <address>
                          <br>ชื่อ-นามสกุล: <?php echo $employee[0]['full_name'];?>
                          <br>บัชชีธนาคาร: <?php echo $employee[0]['account'];?> ไทยพาณิชย์
                          <br>ประเภทพนักงาน: <?php echo $employee[0]['type'];?>                          
                      </address>
                      </div>
                      <!-- /.col -->
                      <div class="col-md-3 col-sm-3 col-xs-3 invoice-col">
                        <address>
                          <br>งวดวันที่: <?php echo $salary[0]['date'];?>
                        </address>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row"><hr>
                      <div class="col-md-6 col-sm-6 col-xs-6 ">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th style="width:50">รายการได้</th>
                              <th style="width:20"></th>
                              <th style="width:30">จำนวนเงิน</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>เงินเดือน</td>
                              <?php echo "<TD>" .$hour[0]['sum_hour']. "</TD>";?>
                              <?php echo "<TD>" .$salary[0]['total']. "</TD>";?>
                            </tr>
                            <tr>
                              <td>OT 1.5</td>
                              <?php echo "<TD>" .$hour[0]['sum_ot1']. "</TD>";?>
                              <?php echo "<TD>" .$salary[0]['ot1']. "</TD>";?>
                            </tr>
                            <tr>
                              <td>OT 2</td>
                              <?php echo "<TD>" .$hour[0]['sum_ot2']. "</TD>";?>
                              <?php echo "<TD>" .$salary[0]['ot2']. "</TD>";?>
                            </tr>
                            <tr>
                              <?php 
                                echo "<TD>" ."เบี้ยขยัน". "</TD>";
                                echo "<TD>" ."</TD>";
                                echo "<TD>" .$salary[0]['diligence']. "</TD>";
                               ?>
                            </tr>
                            <tr>
                              <th>รวมรายการได้:</th>
                              <td></td>
                              <?php echo "<TD>" .$salary[0]['income_all']. "</TD>";?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6 ">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th style="width:50">รายการหัก</th>
                              <th style="width:10"></th>
                              <th style="width:40">จำนวนเงิน</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>ลาเกินสิทธิ์</td>
                              <td></td>
                              <?php echo "<TD>" .$salary[0]['holiday_pay']. "</TD>";?>
                            </tr>
                            <tr>
                              <td>สาย</td>
                              <td></td>
                              <?php echo "<TD>" .$salary[0]['late_pay']. "</TD>";?>
                            </tr>
                            <tr>
                              <td>ประกันสังคม</td>
                              <td>5%</td>
                              <?php echo "<TD>" .$salary[0]['insurance']. "</TD>";?>
                            </tr>
                            <tr>
                              <td>อื่นๆ</td>
                              <td></td>
                              <?php echo "<TD>" .$salary[0]['other_pay']. "</TD>";?>
                            </tr>
                            <tr>
                              <th>รวมรายการหัก:</th>
                              <td></td>
                              <?php echo "<TD>" .$salary[0]['pay_all']. "</TD>";?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.col -->
                    </div><hr>
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
                                <th>ภาษี (7%):</th>
                                <td>0</td>
                              </tr>
                              <tr>
                                <th>รวมรายได้สุทธิ:</th>
                                <?php echo "<TD>" .($salary[0]['income_all'] - $salary[0]['pay_all']). "</TD>";?>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-md-8 col-ms-8 col-xs-7"></div>
                      <div class="col-md-4 col-ms-4 col-xs-5">
                        <p>ผู้รับเงิน ..................................................</p>
                      </div>                     
                    </div>

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
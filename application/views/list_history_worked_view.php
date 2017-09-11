<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>History Worked</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <!-- include tabbar  -->
        <?php include('tab_bar_view.php') ?>
        <!-- /include tabbar  -->   
        
          <div class="right_col" role="main">
            <div class="row">
              <div class="col-md-2 col-sm-2 col-xs-6"></div>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ประวัติการทำงานทั้งหมด</h2>                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">             					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th style="width: 30%">วันที่</th>
                          <th style="width: 30%">เวลาเข้า</th>
                          <th style="width: 30%">เวลาออก</th>                    
                        </tr>
                      </thead>
                      <tbody>
                        <?php if($worked1 != null){
                          foreach($worked1 as $key => $row){
                              echo "<TR>";
                              echo "<TD>" .$row['working_date']. "</TD>";
                              echo "<TD>" .$row['working_start']. "</TD>";
                              echo "<TD>" .$row['working_end']. "</TD>";       
                          ?>                     
                        <?php }} ?>    
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
            </div><br><br>
            <div class="row">
              <div class="col-md-2 col-sm-2 col-xs-6"></div>
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ประวัติการทำงานวันหยุดพิเศษ</h2>                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">             					
                    <table id="datatable-keytable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10%">วันที่</th>
                          <th style="width: 30%">เวลาเข้า</th>
                          <th style="width: 30%">เวลาออก</th>
                          <th style="width: 30%">หมายเหตุ</th>                    
                        </tr>
                      </thead>
                      <tbody>
                        <?php if($worked2 != null){
                          foreach($worked2 as $key => $row){
                              echo "<TR>";
                              echo "<TD>" .$row['working_date']. "</TD>";
                              echo "<TD>" .$row['working_start']. "</TD>";
                              echo "<TD>" .$row['working_end']. "</TD>";
                              echo "<TD>" .$row['working_detail']. "</TD>";       
                          ?>                     
                        <?php }} ?>    
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
            </div>
          </div>          
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/jszip/dist/jszip.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/pdfmake/build/pdfmake.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/pdfmake/build/vfs_fonts.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js')?>"></script>

  </body>
</html>
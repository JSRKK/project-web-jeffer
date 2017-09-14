<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Work schedule</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="<?php echo base_url('assets/vendors/fullcalendar/dist/fullcalendar.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/fullcalendar/dist/fullcalendar.print.css')?>" rel="stylesheet" media="print">

    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">

    <!-- schedule from database to jquery -->
    <div id ="event" data-events='<?php echo json_encode($events); ?>' data-hidden="true" ></div>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      
        <!-- include tabbar  -->
        <?php include('tab_bar_view.php') ?>
        <!-- /include tabbar  -->  
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Calendar</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-calendar"></i>  ปฏิทินงาน</h2>                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id='calendar'></div>

                  </div>
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

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->
    <!-- calendar modal -->
        
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js')?>"></script>
    <!-- FullCalendar -->
    <script src="<?php echo base_url('assets/vendors/moment/min/moment.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/fullcalendar/dist/fullcalendar.min.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.js')?>"></script>
      
  </body>
</html>
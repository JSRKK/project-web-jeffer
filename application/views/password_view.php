<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Changea password </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet">

    <!-- PNotify -->
    <link href="<?php echo base_url('assets/vendors/pnotify/dist/pnotify.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/pnotify/dist/pnotify.buttons.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/vendors/pnotify/dist/pnotify.nonblock.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css')?>">
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
              <div class="col-md-2 col-sm-2 "></div>
              <div class="col-md-8 col-sm-8 col-xs-12"><br><br>
                  <?php if($this->session->flashdata('success')): ?>    
                    <div id ="alert3" data-notify='<?php echo json_encode($data[0]); ?>' data-hidden="true" ></div> 
                  <?php endif; ?>
                  <?php if($this->session->flashdata('idNull')): ?>   
                    <div id ="alert3" data-notify='<?php echo json_encode($data[0]); ?>' data-hidden="true" ></div> 
                  <?php endif; ?>
                  <?php if($this->session->flashdata('passwordNull')): ?>    
                    <div id ="alert3" data-notify='<?php echo json_encode($data[0]); ?>' data-hidden="true" ></div>
                  <?php endif; ?>
                  <?php if($this->session->flashdata('duplicate')): ?>  
                    <div id ="alert3" data-notify='<?php echo json_encode($data[0]); ?>' data-hidden="true" ></div>
                  <?php endif; ?>
              </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-sm-2"></div>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>เปลี่ยนรหัสผ่าน</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <br>
                  <form class="form-horizontal form-label-left" novalidate action="<?php echo base_url('index.php/PasswordController/change_password'); ?>"  method="POST" enctype="multipart/form-data">
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">รหัสผู้ใช้งาน<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length="5"  name="username" required="required" type="text">
                      </div>
                    </div>      
                    <div class="item form-group">
                      <label for="password" class="control-label col-md-3">รหัสผ่านปัจจุบัน</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password" type="password" name="oldPassword" data-validate-length="5" class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="password" class="control-label col-md-3">รหัสผ่านใหม่</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password" type="password" name="newPassword" data-validate-length="5" class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">ยืนยันรหัสผ่านใหม่</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="password2" type="password" name="comfirmPassword" data-validate-linked="newPassword" class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-7 col-sm-7 col-xs-2"></div>
                      <div class="col-md-5 col-sm-5 col-xs-10">
                        <input id="send" type="submit" class="btn btn-success" value="Submit">
                        <button type="reset" class="btn btn-defuat">Cancel</button>
                      </div>
                    </div>
                  </form>
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

    <!-- validator -->
    <script src="<?php echo base_url('assets/vendors/validator/validator.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')?>"></script>                         
    <!-- PNotify -->
    <script src="<?php echo base_url('assets/vendors/pnotify/dist/pnotify.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/pnotify/dist/pnotify.buttons.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/pnotify/dist/pnotify.nonblock.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.js')?>"></script>
	
  </body>
</html>
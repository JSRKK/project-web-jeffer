<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jeffer</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/vendors/animate.css/animate.min.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css')?>">
    
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <br><br>
      <div class="login_wrapper row">
        <div class="animate form login_form col-md-6 col-sm-6 col-xs-12">
          <section class="login_content">
            <form action="<?php echo base_url('index.php/LoginController/check_login'); ?>"  method="POST" enctype="multipart/form-data">
              <h1>Log in</h1>
              <?php if($this->session->flashdata('error')): ?>    
                      <div class="alert alert-danger">
                          <p><center> รหัสผู้ใช้งานไม่ถูกต้อง! </center><p>
                      </div>
              <?php endif; ?>
              <div class="item form-group">
                <input id="username" name="username" type="text" class="form-control" placeholder="Username" required="required" />
              </div>
              <div class="item form-group">
                <input name="password" type="password" class="form-control" placeholder="Password" required="required" />
              </div>
              <div>
                <input id="send" type="submit" class="btn btn-success pull-right" value="Log In">
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>

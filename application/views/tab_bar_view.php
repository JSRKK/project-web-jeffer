
<!-- tab bar menu -->
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-bank"></i><span> Jeffer Restaurant</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home </span></a>
                  </li>
                  <li><a href="<?php echo base_url('index.php/ScheduleController')?>"><i class="fa fa-edit"></i> ลงตารางเวลางาน </span></a>
                  </li>
                  <li><a href="<?php echo base_url('index.php/ShowScheduleController')?>"><i class="fa fa-calendar"></i> ปฏิทินงาน </span></a>        
                  </li>
                  <li><a href="<?php echo base_url('index.php/ListHolidayController')?>"><i class="fa fa-calendar-o"></i> ปฏิทินวันหยุด </span></a>        
                  </li>
                  <li><a href="<?php echo base_url('index.php/ListSalaryController')?>"><i class="fa fa-money"></i></i> เงินเดือน </span></a>               
                  </li>
              </div>

            </div>
            <!-- /sidebar menu -->

        
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile </a></li>
                    <li>
                      <a href="javascript:;">
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<!-- /tab bar menu -->
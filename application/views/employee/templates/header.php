<?php if($this ->session-> userdata('user_type')=="")
        {redirect("https://teaminterval.in/employee/login");}
        ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Employee | INTERVAL™</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    
    <!-- Datatables -->
    
    <link href="<?php echo base_url();?>assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>assets/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/admin/build/css/custom.min.css" rel="stylesheet">
    
     <script src="<?php echo base_url();?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url();?>employee/update_profile" class="site_title"><i class="fa fa-paw"></i> <span>INTERVAL™</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>assets/admin/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this ->session-> userdata('name'); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><?php echo $this ->session-> userdata('user_type'); ?></h3>
                <ul class="nav side-menu">
                  <li><a href="update_profile"><i class="fa fa-home"></i>Dashboard</a></li>
                      
                      <li><a><i class="fa fa-tasks"></i>  My Works  <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <?php if($this ->session-> userdata('userID')==254) {?><li><a href="trainer_data">Trainer</a></li><?php }?>
                          <?php if($this ->session-> userdata('user_type_id')==23) {?><li><a href="employee_data">Users</a></li><?php }?>
                          <?php if($this ->session-> userdata('user_type_id')==33) {?><li><a href="<?php echo base_url('employee/event_registrations'); ?>">Registration Data</a></li><?php }?>
                          <?php if($this ->session-> userdata('userID')==259||$this ->session-> userdata('userID')==1) {?><li><a href="add_lead">Add Lead</a></li><?php }?>
                          <?php if($this ->session-> userdata('userID')==252||$this ->session-> userdata('userID')==259) {?><li><a href="emp_leave_status">Leave Applications</a></li><?php }?>
                          <?php if($this ->session-> userdata('userID')==252||$this ->session-> userdata('userID')==259||$this ->session-> userdata('userID')==253||$this ->session-> userdata('userID')==255||$this ->session-> userdata('userID')==254||$this ->session-> userdata('userID')==252||$this ->session-> userdata('userID')==1) {?><li><a href="job_application">Job Applications</a></li><?php }?>
                          <?php if($this ->session-> userdata('userID')==138) {?><li><a href="bank_accounts_data">Bank Account Details</a></li><?php }?>
                        </ul>
                      </li>
                      
                      <li><a><i class="fa fa-inr"></i>  Payments  <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="bank_account_details">Bank Account Details</a></li>
                          <li><a href="view_payments">View Payments</a></li>
                        </ul>
                      </li>
                      
                      <li><a><i class="fa fa-gift"></i>  Refer & Earn  <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="add_referral">Add Referral</a></li>
                          <li><a href="referral_status">Referral Status</a></li>
                          <li><a href="redeem_referral">Redeem</a></li>
                        </ul>
                      </li>
                      
                      <li><a><i class="fa fa-user"></i>  Employee Services  <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href="update_profile">Profile</a></li>
                          <li><a href="leave_status">Leave</a></li>
                          <li><a href="change_password">Change Password</a></li>
                        </ul>
                      </li>
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url();?>assets/admin/images/img.jpg" alt=""><?php echo $this ->session-> userdata('email_id'); ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <!--<a class="dropdown-item"  href="javascript:;"> Profile</a>-->
                    <!--  <a class="dropdown-item"  href="javascript:;">-->
                    <!--    <span class="badge bg-red pull-right">50%</span>-->
                    <!--    <span>Settings</span>-->
                    <!--  </a>-->
                  <a class="dropdown-item"  href="update_profile"><i class="fa fa-user pull-right"></i>My Profile</a>
                  <a class="dropdown-item"  href="http://api.whatsapp.com/send?phone=917025841234&text=Hello%20Team%20INTERVAL™,%20I%20am%20<?php echo $this ->session-> userdata('name'); ?>" target=_blank><i class="fa fa-whatsapp pull-right"></i>Contact Us</a>
                  <a class="dropdown-item"  href="http://api.whatsapp.com/send?phone=917025848094&text=Hello%20Team%20INTERVAL™,%20I%20am%20<?php echo $this ->session-> userdata('name'); ?>" target=_blank><i class="fa fa-life-ring pull-right"></i>Technical Support</a>
                    <a class="dropdown-item"  href="change_password"><i class="fa fa-key pull-right"></i> Change Password</a>
                    <a class="dropdown-item"  href="logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <!--<li role="presentation" class="nav-item dropdown open">-->
                <!--  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">-->
                <!--    <i class="fa fa-envelope-o"></i>-->
                <!--    <span class="badge bg-green">0</span>-->
                <!--  </a>-->
                <!--  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">-->
                    
                <!--    <li class="nav-item">-->
                <!--      <div class="text-center">-->
                <!--        <a class="dropdown-item">-->
                <!--          <strong>See All Alerts</strong>-->
                <!--          <i class="fa fa-angle-right"></i>-->
                <!--        </a>-->
                <!--      </div>-->
                <!--    </li>-->
                <!--  </ul>-->
                <!--</li>-->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
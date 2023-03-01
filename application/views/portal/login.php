<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portal | KMDC™</title>
  <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/dist/img/icon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/admin/build/css/custom.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- <script type="text/javascript">
    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    if (isMobile) {
        alert('Request Desktop Site in Your Browser to get Better Perfomance');
    } else {
      alert('hi Desktop');
    }
  </script> -->
    <script type="text/javascript">

               function select_option() 
               {
                login_type = document.getElementById("login_type").value;
                if (login_type=="admin" || login_type=="department" || login_type=="staff")
                 {
                  document.getElementById("year_of_accession").style.display ="inline";
                 }
                else
                  document.getElementById("year_of_accession").style.display ="none";
              }
              function validate()
              {
                var admn_no=document.getElementById('admn_no');
              var password=document.getElementById('user_pwd');
              var c_password=document.getElementById('c_user_pwd');
                if(admn_no.value.length!=6)
                {
                  alert('Invalid Admission No.');
                  return false;
                }
                else if(password.value!=c_password.value)
                {
                  alert('Password Mismatch.');
                  return false;

                }
                else
                  return true;
              }
            </script>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <a class="hiddenanchor" id="reset_password"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="app/login_check" method="post" autocomplete="off">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" name="user_name" placeholder="Username" required="required" />
              </div>
              <div>
                <input type="password" class="form-control" name="user_pwd" placeholder="Password" required="required" />
              </div>
              <div>
                <button type="submit" name="submit" class="btn btn-dark">Login <i class='fa fa-sign-in' style="font-size: 20px;vertical-align: middle;"></i></button>
                <br><br>
                <!--<p class="change_link">Lost your password ?-->
                <!--<a href="reset_password" class="to_register">Reset Here</a>-->
                <!--</p>-->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!--<p class="change_link">New to site ?-->
                <!--  <a href="#signup" class="to_register">Create Account </a>-->
                <!--</p>-->

                <div class="clearfix"></div>
                <br />

                <div>
                <img src="<?php echo base_url();?>assets/dist/img/logo.png" alt="KMDC Logo" class="brand-image " style="width:175px; height:60px;">
                 <br><br> <p>© KMDC™</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

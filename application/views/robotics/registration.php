<!DOCTYPE html>
<html lang="en">

<head>
    <title>Robotics Quiz | INTERVAL®</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/users/robotics/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/users/robotics/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/users/robotics/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/users/robotics/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/users/robotics/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/users/robotics/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/users/robotics/css/main.css">
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?php echo base_url();?>assets/users/robotics/images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="post">
                    <span class="login100-form-title">
                        Quiz Registration </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="name" placeholder="Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Mobile is required">
                        <input class="input100" type="number" name="mobile" placeholder="Mobile">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Data of Birth is required: ex@abc.xyz">
                        <input class="input100" type="date" name="dob" placeholder="DOB">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="School is required">
                        <input class="input100" type="text" name="school" placeholder="School Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-building" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="<?php echo base_url();?>assets/users/robotics/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/users/robotics/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url();?>assets/users/robotics/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/users/robotics/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>assets/users/robotics/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="<?php echo base_url();?>assets/users/robotics/js/main.js"></script>

</body>

</html>
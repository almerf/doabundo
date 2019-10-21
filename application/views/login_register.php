<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Katering Doabundo</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url() ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="page-wrapper bg-gray p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body" id="register">
                    <h2 class="title">Registration</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Username" name="username">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Confirm Password" name="c_password">
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Register</button>
                            <a href="#" class="signup-image-link" id="tologin">I am already member</a>
                        </div>
                    </form>
                </div>
                <div class="card-body" id="login">
                    <h2 class="title">Login</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Username" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Password" name="name">
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit"><a href="<?php echo site_url('doabundo/dashboard'); ?>">Login</a></button>
                            <a href="#" class="signup-image-link" id="toregister">I am not already member</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url(); ?>assets/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

<script type="text/javascript">
        $('#login').hide();
        $("#tologin").on("click",function() {
          $('#login').fadeOut('slow');
          $('#register').fadeOut('slow');
          function show(){
            $('#login').fadeIn('slow');
        };
        window.setTimeout(show, 850);
          
        });
        $("#toregister").on("click",function() {
          $('#login').fadeOut('slow');
          $('#register').fadeOut('slow');
          function show(){
            $('#register').fadeIn('slow');
        };
        window.setTimeout(show, 850);
        });

</script>

</html>
<!-- end document-->
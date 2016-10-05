<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOGIN</title>
        <link type="image/png" href="<?php echo base_url() ?>assets/images/favicon.png" rel="shortcut icon">
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic' rel='stylesheet'>
    </head>
    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>
                    <a class="brand" href="<?php echo base_url() ?>">Stochastic Programming</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li><a href="<?php echo base_url() ?>register">Sign Up</a></li>
                            <li><a href="<?php echo base_url() ?>password">Forgot your password?</a></li>
                        </ul>
                    </div><!-- /.nav-collapse -->
                </div>
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="module module-login span4 offset4" style="margin-bottom: 130px">
                        <form class="form-vertical" action="<?php echo base_url() ?>admin">
                            <div class="module-head">
                                <h3>SIGN IN</h3>
                            </div>
                            <div class="module-body">
                                <div class="control-group">
                                    <div class="controls row-fluid">
                                        <input class="span12" type="text" id="inputEmail" placeholder="Username">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls row-fluid">
                                        <input class="span12" type="password" id="inputPassword" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="module-foot">
                                <div class="control-group">
                                    <div class="controls clearfix">
                                        <button type="submit" class="btn btn-primary pull-right">Login</button>
                                        <label class="checkbox">
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/.wrapper-->

        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 - 122410101019 </b> Nur Kholis Mansur
            </div>
        </div>
        <script src="<?php echo base_url() ?>assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
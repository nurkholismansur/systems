<!DOCTYPE html>
<html lang="en">
    <head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>STOCHASTIC PROGRAMMING</title>
        <link type="image/png" href="<?php echo base_url() ?>assets/images/favicon.png" rel="shortcut icon">
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic'
              rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo site_url() ?>admin">Stochastic Programming</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li><a href="<?php echo site_url() ?>"><i class="icon-eye-open"></i></a></li>
                            <li><a href="<?php echo site_url() ?>"><i class="icon-user-md"></i></a></li>
                            <li><a href="<?php echo site_url() ?>admin/charts"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="<?php echo site_url() ?>" class="dropdown-toggle" data-toggle="dropdown">Rule System
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url() ?>">Tutorial</a></li>
                                    <li><a href="<?php echo site_url() ?>">Functional</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo site_url() ?>">Documentation</a></li>
                                </ul>
                            </li>
                            <li class="nav-user dropdown"><a href="<?php echo site_url() ?>" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url() ?>assets/images/user1.png" class="nav-avatar" />
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url() ?>admin/profile">Your Profile</a></li>
                                    <li><a href="<?php echo site_url() ?>">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo site_url() ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->

        <!--/.widget wrapper -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo site_url() ?>admin">
                                        <i class="menu-icon icon-dashboard"></i>Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#togglePages">
                                        <i class="menu-icon icon-book"></i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>Data Master
                                    </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="<?php echo site_url() ?>admin/cabaimerah"><i class="icon-leaf"></i> Data Cabai Merah</a></li>
                                        <li><a href="<?php echo site_url() ?>admin/distributor"><i class="icon-truck"></i> Data Distributor</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url() ?>admin/task"><i class="menu-icon icon-tasks"></i>Data Transaksi</a></li>
                                <li><a href="<?php echo site_url() ?>admin/perusahaan"><i class="menu-icon icon-suitcase"></i>Perusahaan</a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a href="<?php echo site_url() ?>admin/charts"><i class="menu-icon icon-bar-chart"></i>Statistik Distribusi</a></li>
                                <li><a href="<?php echo site_url() ?>admin/forms"><i class="menu-icon icon-paste"></i>Stochastic Programming</a></li>
                                <li><a href="<?php echo site_url() ?>admin/tables"><i class="menu-icon icon-table"></i>Penjadwalan</a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a href="<?php echo site_url() ?>admin/users"><i class="menu-icon icon-user-md"></i>All Users </a></li>
                                <li><a href="<?php echo site_url() ?>login"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Cookies Admin</title>
    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/4.2.0/css/font-awesome.min.css" />

	<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>

    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 
    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- ace settings handler -->
    <script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>

    <!-- STYLES AND EXTRA CSS START -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery-confirm.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css?<?=rand(0,999);?>">

    <!-- STYLES AND EXTRA CSS END -->
</head>

<body class="no-skin">
<input type="hidden" id="base_path" value="<?php echo base_url(); ?>">
<div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>
    <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header pull-left">
            <a href="<?php echo base_url(); ?>" class="navbar-brand"> <small> <i class="fa fa-leaf"></i> Advanced GDPR EU Cookie Bar Setup </small> </a> <!-- <?php //echo ucfirst($logedin['check_user']); ?> Panel  -->
        </div>
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
			<!--<span class="user-info"> <?php echo $logedin['full_name']; ?> </span> -->
        </div>
    </div>
    <!-- /.navbar-container -->
</div>
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>
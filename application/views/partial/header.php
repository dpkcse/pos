<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<base href="<?php echo base_url();?>" />
	<title><?php echo $this->config->item('company') . ' | ' . $this->lang->line('common_powered_by') . ' ICTPARK ' . $this->config->item('application_version') ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo 'dist/bootswatch/' . (empty($this->config->item('theme')) ? 'flatly' : $this->config->item('theme')) . '/bootstrap.min.css' ?>"/>

	<?php if ($this->input->cookie('debug') == 'true' || $this->input->get('debug') == 'true') : ?>
		<!-- bower:css -->
		<link rel="stylesheet" href="bower_components/jquery-ui/themes/base/jquery-ui.css" />
		<link rel="stylesheet" href="bower_components/bootstrap3-dialog/dist/css/bootstrap-dialog.min.css" />
		<link rel="stylesheet" href="bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.css" />
		<link rel="stylesheet" href="bower_components/smalot-bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="bower_components/bootstrap-select/dist/css/bootstrap-select.css" />
		<link rel="stylesheet" href="bower_components/bootstrap-table/src/bootstrap-table.css" />
		<link rel="stylesheet" href="bower_components/bootstrap-table/dist/extensions/sticky-header/bootstrap-table-sticky-header.css" />
		<link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css" />
		<link rel="stylesheet" href="bower_components/chartist/dist/chartist.min.css" />
		<link rel="stylesheet" href="bower_components/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.css" />
		<link rel="stylesheet" href="bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" />
		<!-- endbower -->
		<!-- start css template tags -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.autocomplete.css"/>
		<link rel="stylesheet" type="text/css" href="css/invoice.css"/>
		<link rel="stylesheet" type="text/css" href="css/ospos.css"/>
		<link rel="stylesheet" type="text/css" href="css/ospos_print.css"/>
		<link rel="stylesheet" type="text/css" href="css/popupbox.css"/>
		<link rel="stylesheet" type="text/css" href="css/receipt.css"/>
		<link rel="stylesheet" type="text/css" href="css/register.css"/>
		<link rel="stylesheet" type="text/css" href="css/reports.css"/>
		<!-- end css template tags -->
		<!-- bower:js -->
		<script src="bower_components/jquery/dist/jquery.js"></script>
		<script src="bower_components/jquery-form/src/jquery.form.js"></script>
		<script src="bower_components/jquery-validate/dist/jquery.validate.js"></script>
		<script src="bower_components/jquery-ui/jquery-ui.js"></script>
		<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
		<script src="bower_components/bootstrap3-dialog/dist/js/bootstrap-dialog.min.js"></script>
		<script src="bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.js"></script>
		<script src="bower_components/smalot-bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
		<script src="bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
		<script src="bower_components/bootstrap-table/src/bootstrap-table.js"></script>
		<script src="bower_components/bootstrap-table/dist/extensions/export/bootstrap-table-export.js"></script>
		<script src="bower_components/bootstrap-table/dist/extensions/mobile/bootstrap-table-mobile.js"></script>
		<script src="bower_components/bootstrap-table/dist/extensions/sticky-header/bootstrap-table-sticky-header.js"></script>
		<script src="bower_components/moment/min/moment.min.js"></script>
		<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="bower_components/file-saver.js/FileSaver.js"></script>
		<script src="bower_components/html2canvas/build/html2canvas.js"></script>
		<script src="bower_components/jspdf/dist/jspdf.min.js"></script>
		<script src="bower_components/jspdf-autotable/dist/jspdf.plugin.autotable.js"></script>
		<script src="bower_components/tableExport.jquery.plugin/tableExport.min.js"></script>
		<script src="bower_components/chartist/dist/chartist.min.js"></script>
		<script src="bower_components/chartist-plugin-axistitle/dist/chartist-plugin-axistitle.min.js"></script>
		<script src="bower_components/chartist-plugin-pointlabels/dist/chartist-plugin-pointlabels.min.js"></script>
		<script src="bower_components/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js"></script>
		<script src="bower_components/chartist-plugin-barlabels/dist/chartist-plugin-barlabels.min.js"></script>
		<script src="bower_components/remarkable-bootstrap-notify/bootstrap-notify.js"></script>
		<script src="bower_components/js-cookie/src/js.cookie.js"></script>
		<script src="bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>
		

		
		<!-- endbower -->
		<!-- start js template tags -->
		<script type="text/javascript" src="js/imgpreview.full.jquery.js"></script>
		<script type="text/javascript" src="js/manage_tables.js"></script>
		<script type="text/javascript" src="js/nominatim.autocomplete.js"></script>

		
		<!-- end js template tags -->
	<?php else : ?>
		<!--[if lte IE 8]>
		<link rel="stylesheet" media="print" href="dist/print.css" type="text/css" />
		<![endif]-->
		<!-- start mincss template tags -->
		<link rel="stylesheet" type="text/css" href="dist/jquery-ui/jquery-ui.min.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="dist/opensourcepos.min.css?rel=84371241b2"/> -->

		<!-- ADMIN LTE CSS-->
		<!-- Font Awesome -->
		<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
		<link rel="stylesheet" type="text/css" href="dist/adminlte/css/AdminLTE.min.css"/>
		<link rel="stylesheet" type="text/css" href="dist/adminlte/css/skins/_all-skins.min.css"/>

		<!-- end mincss template tags -->
		<!-- start minjs template tags -->
		<script type="text/javascript" src="dist/opensourcepos.min.js?rel=d7a51432ab"></script>
		<!-- end minjs template tags -->

		<!-- AdminLTE App -->
		<script src="dist/adminlte/js/adminlte.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		$.widget.bridge('uibutton', $.ui.button);
		</script>
		
	<?php endif; ?>

	<?php $this->load->view('partial/header_js'); ?>
	<?php $this->load->view('partial/lang_lines'); ?>

	<style type="text/css">
		html {
			overflow: auto;
		}
	</style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

	<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MP</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo $this->config->item('company'); ?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
		  	<div id="liveclock"><?php echo date($this->config->item('dateformat') . ' ' . $this->config->item('timeformat')) ?></div>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/adminlte/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user_info->first_name . ' ' . $user_info->last_name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
				<?php echo anchor('home/change_password/'.$user_info->person_id, $user_info->first_name . ' ' . $user_info->last_name, array('class' => 'modal-dlg', 'data-btn-submit' => $this->lang->line('common_submit'), 'title' => $this->lang->line('employees_change_password'))); ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat"><?php echo ($this->input->get('debug') == 'true' ? $this->session->userdata('session_sha1') . '  |  ' : ''); ?>
					<?php echo anchor('home/logout', $this->lang->line('common_logout')); ?></a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo $this->uri->segment(1) == 'home' ? 'active' : ''; ?>">
          <a href="<?php echo site_url(); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
		<?php foreach($allowed_modules as $module): ?>
		<li class="<?php echo $module->module_id == $this->uri->segment(1) ? 'active' : ''; ?>">
			<a href="<?php echo site_url("$module->module_id"); ?>" title="<?php echo $this->lang->line("module_" . $module->module_id); ?>" class="menu-icon">
				<img class="fa" src="<?php echo base_url() . 'images/menubar/' . $module->module_id . '.png'; ?>" border="0" alt="Module Icon"/>
				<span><?php echo $this->lang->line("module_" . $module->module_id) ?></span>
			</a>
		</li>
		<?php endforeach; ?>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
	  <i class="fa fa-cog"></i> <?php echo strtoupper($this->uri->segment(1)) ; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
		<!-- Main content -->
		<section class="content">
			<div class="container">
				<div class="row">
	 

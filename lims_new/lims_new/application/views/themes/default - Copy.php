<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<title><?php echo $title; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
 <link href="<?php echo base_url(); ?>assets/css/skins/font-awesome.css" rel="stylesheet" type="text/css" /> 
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- Datatables -->
    <link href="<?php echo base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url('assets'); ?>/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url('assets'); ?>/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	<!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/jQuery/jQuery-2.1.3.min.js"></script>	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<?php
	/** -- Copy from here -- */
	if(!empty($meta))
	foreach($meta as $name=>$content){
		echo "\n\t\t";
		?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
			 }
	echo "\n";

	if(!empty($canonical))
	{
		echo "\n\t\t";
		?><link rel="canonical" href="<?php echo $canonical?>" /><?php

	}
	echo "\n\t";

	foreach($css as $file){
	 	echo "\n\t\t";
		?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	} echo "\n\t";

	foreach($js as $file){
			echo "\n\t\t";
			?><script src="<?php echo $file; ?>"></script><?php
	} echo "\n\t";

	/** -- to here -- */
	?>
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">

		<!-- =============================================== -->
		<?php echo $this->load->get_section('sidebar'); ?>
		<!-- =============================================== -->

		<!-- Right side column. Contains the navbar and content of the page -->
		<div class="content-wrapper">
			<!-- Main content -->
			<section class="content">
				<?php echo $output;?>
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->

		
		<!--<footer class="main-footer">
			<div class="pull-right hidden-xs">
			  <b>Version</b> 2.0
			</div>
			<strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
		</footer>-->
    </div><!-- ./wrapper -->

    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js" type="text/javascript"></script>	
    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets'); ?>/plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url('assets'); ?>/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets'); ?>/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets'); ?>/js/demo.js" type="text/javascript"></script>
	<!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables/jquery.dataTables.js"></script>
	<!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap.js"></script>	
  </body>
</html>
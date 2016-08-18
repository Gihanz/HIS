<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>HIS - Admin Panel</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('assets'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?php echo base_url('assets'); ?>/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url('assets'); ?>/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url('assets'); ?>/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css"  />
    <!-- Plugins Styles -->
    <link href="<?php echo base_url('assets'); ?>/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- jQuery 2.1.3 -->
    
    <script src="<?php echo base_url('assets'); ?>/plugins/jQuery/jQuery-2.1.3.min.js"></script>
     
  <script  type="text/javascript" src="<?php echo base_url('assets'); ?>/js/birthdaypickerjs/jquery-birthday-picker.min.js"></script>

    <link href="<?php echo base_url('assets'); ?>/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url('assets'); ?>/plugins/datatables/TableTools/dataTables.tableTools.css" rel="stylesheet" type="text/css" />
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <?php
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
  ?>
  </head>
  <body class="skin-blue">
    <!-- Site wrapper -->
    <div class="wrapper">
      
      <header class="main-header">
        <a href="#" class="logo"><b>HIS</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <?php $username  = $this->session->userdata('name');?>
            <?php $userId  = $this->session->userdata('userId');
             $roleId  = $this->session->userdata('roleId');
              $role  = $this->session->userdata('role');
            ?>
        
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url('assets'); ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $username?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url('assets'); ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php  echo $username?>
<!--    KEeep the USer iD,usernam,role for Javascript Kanchana
                  <small>Member since Nov. 2012</small>-->
                    </p>
  <input type="hidden" name="feildUserId" id="feildUserId" value="<?php echo $userId; ?>" />
  <input type="hidden" name="feildUserName" id="feildUserName" value="<?php echo $username; ?>" />
   <input type="hidden" name="feildUserRole" id="feildUserRole" value="<?php echo $role; ?>" />
    <input type="hidden" name="feildUserRoleId" id="feildUserRoleId" value="<?php echo $roleId; ?>" />
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php  echo base_url().'login_controller'; ?>"  class="btn btn-default btn-flat">Sign out</a>
               

                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- =============================================== -->
    <?php echo $this->load->get_section('sidebar'); ?>
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
      <div class="row">
        <?php echo $output;?>
      </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="#">SLIIT HIS</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->


    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets'); ?>/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url('assets'); ?>/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets'); ?>/js/app.min.js" type="text/javascript"></script>
    <!-- Plugins -->
    <script src='<?php echo base_url('assets'); ?>/plugins/datepicker/bootstrap-datepicker.js'></script>
    
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables/jquery.dataTables.js"></script>
  <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap.js"></script>

    <script src="<?php echo base_url('assets'); ?>/plugins/datatables/TableTools/dataTables.tableTools.js"></script>
  </body>
</html>
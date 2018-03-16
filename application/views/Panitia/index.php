<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline' gap:; style-src 'self' 'unsafe-inline'; media-src *" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/main.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/vendor/fontawesome-free-5.0.6/on-server/css/fontawesome.min.css">
	
    <title>HCNFT-Panitia</title>
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href=""><img src="<?php echo base_url();?>asset/img/logo.png"></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user-circle fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="<?php echo base_url();?>asset/page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url();?>asset/page-user.html"><i class="fa fa-user-circle fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('Hydrococo/index');?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
	
	<!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo base_url();?>asset/img/foto_50.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Nida Nurul Awaliah</p>
          <p class="app-sidebar__user-designation">Panitia Lapang</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="<?php echo site_url('Panitia/index');?>"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Home</span></a></li>
		<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-futbol"></i><span class="app-menu__label">Pertandingan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo site_url('Panitia/pertandingan'); ?>"><i class=""></i> Pilih Tim</a></li>
            <li><a class="treeview-item" href="<?php echo site_url('Panitia/mulaiPertandingan'); ?>"><i class=""></i> Mulai Tanding</a></li>
          </ul>
        </li>
		<li><a class="app-menu__item" href="<?php echo site_url('Panitia/hasilPertandingan'); ?>"><i class="app-menu__icon fa fa-table"></i><span class="app-menu__label">Hasil Pertandingan</span></a></li>
	  
	  </ul>
    </aside>
	
	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-home"></i> Home</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class=""></i></li>
          <li class="breadcrumb-item"><a href="#">Home</a></li>
        </ul>
      </div>
    </main>
	
	<!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url();?>asset/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url();?>asset/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
        app.initialize();
    </script>
</body>

</html>

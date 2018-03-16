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
  
    <title>Hydrococo Cup</title>
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
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user-circle fa-lg"></i> Profil</a></li>
            <li><a class="dropdown-item" href="<?php echo site_url('Hydrococo/index')?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
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
          <p class="app-sidebar__user-designation">Tim</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="<?php echo site_url('Admin/index')?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dasbor</span></a></li>
        <li><a class="app-menu__item" href="<?php echo site_url('Admin/peserta')?>"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Peserta</span></a></li>
        <li><a class="app-menu__item active" href="<?php echo site_url('Admin/tim')?>"><i class="app-menu__icon fa fa-cubes"></i><span class="app-menu__label ">Tim</span></a></li>
        <li><a class="app-menu__item" href="<?php echo site_url('Admin/panitia')?>"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Panitia</span></a></li>
        <li><a class="app-menu__item" href="<?php echo site_url('Admin/jadwal')?>"><i class="app-menu__icon fa fa-calendar-alt"></i><span class="app-menu__label">Jadwal</span></a></li>
      </ul>
    </aside>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-cubes"></i> Detail Tim</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home"></i></li>
          <li class="breadcrumb-item"><a href="<?php echo site_url('Admin/tim')?>">Tim</a></li>
          <li class="breadcrumb-item">Detail Tim</li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            
            
          </div>
        </div>
      </div>
    </main>
  
  <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url();?>asset/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url();?>asset/js/plugins/pace.min.js"></script>
  <!-- Data table plugin-->
    <script type="text/javascript" src="<?php echo base_url();?>asset/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>asset/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript">
        app.initialize();
    </script>
</body>

</html>
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
          <p class="app-sidebar__user-designation">Panitia</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="<?php echo site_url('Admin/index')?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dasbor</span></a></li>
    		<li><a class="app-menu__item" href="<?php echo site_url('Admin/peserta')?>"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Peserta</span></a></li>
        <li><a class="app-menu__item" href="<?php echo site_url('Admin/tim')?>"><i class="app-menu__icon fa fa-cubes"></i><span class="app-menu__label">Tim</span></a></li>
    		<li><a class="app-menu__item" href="<?php echo site_url('Admin/panitia')?>"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Panitia</span></a></li>
        <li><a class="app-menu__item active" href="<?php echo site_url('Admin/jadwal')?>"><i class="app-menu__icon fa fa-calendar-alt"></i><span class="app-menu__label">Jadwal</span></a></li>
      </ul>
    </aside>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-calendar-alt"></i> Jadwal</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home"></i></li>
          <li class="breadcrumb-item"><a href="#">Jadwal</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <button type="button" name="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary"><i class="fa fa-plus"></i> Buat Jadwal</button>
            </div>
            <hr>

            <div class="col-md-12">
            <div class="tile">
              <form role="form" action="<?php echo site_url('Admin/jadwal'); ?>" method="post">
                <div class="app-search">
                  <h6>PILIH KOTA </h6>&nbsp;&nbsp;
                  <input type="text" name="kota" list="exampleList">
            <datalist id="exampleList">
                      <option value="BPP">BALIKPAPAN</option>
                      <option value="BDL">BANDAR LAMPUNG</option>
                      <option value="BDG">BANDUNG</option>
                      <option value="BJM">BANJARMASIN</option>
                      <option value="BTM">BATAM</option>
                      <option value="BKS">BEKASI</option>
                      <option value="BGR">BOGOR</option>
                      <option value="CBN">CIREBON</option>
                      <option value="DPR">DENPASAR</option>
                      <option value="JKT">JAKARTA</option>
                      <option value="JAP">JAYAPURA</option>
                      <option value="JMR">JEMBER</option>
                      <option value="MKS">MAKASSAR</option>
                      <option value="MLG">MALANG</option>
                      <option value="MND">MANADO</option>
                      <option value="MTR">MATARAM</option>
                      <option value="MDN">MEDAN</option>
                      <option value="PAD">PADANG</option>
                      <option value="PLG">PALEMBANG</option>
                      <option value="PBR">PEKANBARU</option>
                      <option value="PTK">PONTIANAK</option>
                      <option value="PWT">PURWOKERTO</option>
                      <option value="SMR">SAMARINDA</option>
                      <option value="SMG">SEMARANG</option>
                      <option value="SLO">SOLO</option>
                      <option value="SBY">SURABAYA</option>
                      <option value="TNG">TANGERANG</option>
                      <option value="TSM">TASIKMALAYA</option>
                      <option value="YYK">YOGYAKARTA</option>
                    </datalist>&nbsp;
                <button type="submit" name="button" class="btn btn-primary fa fa-search"></button>
              </div><br>
            </form>
          <?php foreach ($nilai->result() as $value) {
            if ($value->idkota == "BPP") {
              echo "<center><h3>BALIKPAPAN</h3></center>";
              break;
            }elseif ($value->idkota == "BDL") {
              echo "<center><h3>BANDAR LAMPUNG</h3></center>";
              break;
            }elseif ($value->idkota == "BDG") {
              echo "<center><h3>BANDUNG</h3></center>";
              break;
            }elseif ($value->idkota == "BJM") {
              echo "<center><h3>BANJARMASIN</h3></center>";
              break;
            }elseif ($value->idkota == "BTM") {
              echo "<center><h3>BATAM</h3></center>";
              break;
            }elseif ($value->idkota == "BKS") {
              echo "<center><h3>BEKASI</h3></center>";
              break;
            }elseif ($value->idkota == "BGR") {
              echo "<center><h3>BOGOR</h3></center>";
              break;
            }elseif ($value->idkota == "CBN") {
              echo "<center><h3>Cirebon</h3></center>";
              break;
            }elseif ($value->idkota == "DPR") {
              echo "<center><h3>DENPASAR</h3></center>";
              break;
            }elseif ($value->idkota == "JKT") {
              echo "<center><h3>JAKARTA</h3></center>";
              break;
            }elseif ($value->idkota == "JAP") {
              echo "<center><h3>JAYAPURA</h3></center>";
              break;
            }elseif ($value->idkota == "JMR") {
              echo "<center><h3>JEMBER</h3></center>";
              break;
            }elseif ($value->idkota == "MKS") {
              echo "<center><h3>MAKASSAR</h3></center>";
              break;
            }elseif ($value->idkota == "MLG") {
              echo "<center><h3>MALANG</h3></center>";
              break;
            }elseif ($value->idkota == "MND") {
              echo "<center><h3>MANADO</h3></center>";
              break;
            }elseif ($value->idkota == "MTR") {
              echo "<center><h3>MATARAM</h3></center>";
              break;
            }elseif ($value->idkota == "MDN") {
              echo "<center><h3>MEDAN</h3></center>";
              break;
            }elseif ($value->idkota == "PAD") {
              echo "<center><h3>PADANG</h3></center>";
              break;
            }elseif ($value->idkota == "PLG") {
              echo "<center><h3>PALEMBANG</h3></center>";
              break;
            }elseif ($value->idkota == "PBR") {
              echo "<center><h3>PEKANBARU</h3></center>";
              break;
            }elseif ($value->idkota == "PTK") {
              echo "<center><h3>PONTIANAK</h3></center>";
              break;
            }elseif ($value->idkota == "PWT") {
              echo "<center><h3>PURWOKERTO</h3></center>";
              break;
            }elseif ($value->idkota == "SMR") {
              echo "<center><h3>SAMARINDA</h3></center>";
              break;
            }elseif ($value->idkota == "SMG") {
              echo "<center><h3>SEMARANG</h3></center>";
              break;
            }elseif ($value->idkota == "SLO") {
              echo "<center><h3>SOLO</h3></center>";
              break;
            }elseif ($value->idkota == "SBY") {
              echo "<center><h3>SURABAYA</h3></center>";
              break;
            }elseif ($value->idkota == "TNG") {
              echo "<center><h3>TANGERANG</h3></center>";
              break;
            }elseif ($value->idkota == "TSM") {
              echo "<center><h3>TASIKMALAYA</h3></center>";
              break;
            }elseif ($value->idkota == "YYK") {
              echo "<center><h3>YOGYAKARTA</h3></center>";
              break;
            }

          } ?>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>No. Telpon</th>
                      <th>Username</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <?php
            $total = array();
            if ($nilai->result() == null) {
              echo "<tr><td colspan='6'><center>Tidak ada panitia</center></td></tr>";
            }else{
              foreach ($nilai->result() as $pernilai) {
                echo "<tr>
                      <td>".$pernilai->namaUser."</td>
                          <td>".$pernilai->tgllahirUser."</td>
                          <td>".$pernilai->alamatUser."</td>
                          <td>".$pernilai->notelpUser."</td>
                          <td>".$pernilai->username."</td>
                          <td>";?>
                            <a href="<?php echo site_url('Admin/aksiEditPanitia/'.$pernilai->username) ?>" class="btn btn-primary" onClick="return confirm('Yakin ingin menghapus anggota ini?')"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo site_url('Admin/aksiDeletePanitia/'.$pernilai->username) ?>" class="btn btn-danger" onClick="return confirm('Yakin ingin menghapus anggota ini?')"><i class="fa fa-trash"></i></a>
                            <?php echo "
                          </td>
                      </tr>";
              }
            }
            ?>
                </table>
              </div>
            </div>
          </div>
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
<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <?php if ($_SESSION['level'] == "admin") {?>
              <li class="menu-header" >Pengelolaan data</li>
              <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>DATA PETUGAS</span></a></li>
              <li><a class="nav-link" href="../data-kelas/read.php"><i class="far fa-square"></i> <span>DATA KELAS</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>DATA SISWA</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>DATA SPP</span></a></li>
              <li class="menu-header">transaksi</li>
              <li><a class="nav-link" href="blank.html"><i class="far fa-aquare"></i> <span>Transaksi Pembayaran</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="far fa-aquare"></i> <span>History Pembayaran</span></a></li>
            <?php } elseif ($_SESSION['level'] =="petugas") { ?>
            <li class="menu-header">Tranksaki</li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Transaksi Pembayaran</span></a></li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>History Pembayaran</span></a></li>
            <?php } else { ?>
              <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>History Pembayaran</span></a></li>
            <?php } ?>

            
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="../logout.php" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div> 
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        </aside>
      </div>

<?php 
session_start();
if($_SESSION['level']==""){
  header("localtion:auth-login-petugas.php?pesan=gagal");
}
?>
<?php require('../template/header.php'); ?>
<?php require('../template/nav.php'); ?>
<?php require('../template/sidebar.php'); ?>

<body>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">]
            <div class="section-header">
                <h1>Dasboard </h1>
            </div>
        </section>
        <div class="row">
          <div class="col">
            <p class="display-1">Selamat datang <?php echo $_SESSION['nama']; ?></p>
          </div>
        </div>
      </div>
      <?php require('../template/footer.php'); ?>
<?php 
session_start();
if($_SESSION['level']==""){
    header("location:auth-login-petugas.php?pesan=gagal");
}
?>

<?php require('../template/header.php'); ?>
<?php require('../template/nav.php'); ?>
<?php require('../template/sidebar.php'); ?>


<div class="main-content">
        <section class="section">]
            <div class="section-header">
                <h1>Update data kelas </h1>
              </section>
              <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h1>Update Data Kelas</h1>
        <?php
        include "../koneksi.php";
        $idKelas = $_GET['id_kelas'];
        $query_mysql = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas=$idKelas");
        $data = mysqli_fetch_array($query_mysql);  ?>
        <form action="action-update.php" method="POST">
          <div class="form-group">
            <label for="idKelas">ID Kelas</label>
            <input type="text" class="form-control" id="idKelas" name="idKelas"placeholder="Masukkan ID Kelas" value="<?php echo $data['id_kelas']; ?>">
          </div>
          
          <div class="form-group">
            <label for="namaKelas">Nama Kelas</label>
            <input type="text" class="form-control" id="namaKelas" name="namaKelas" placeholder="Masukkan Nama Kelas" value="<?php echo $data['nama_kelas']; ?>">
          </div>
          
          <div class="form-group">
            <label for="kompetensiKeahlian">Pilih Kompetensi Keahlian</label>
            <select class="form-control" id="kompetensiKeahlian" name="kompetensiKeahlian">
              <option selected value="<?php echo $data['kompetensi_keahlian']; ?>"></option>
              <option value="RPL">RPL</option>
              <option value="TAV">TAV</option>
              <option value="DPIB">DPIB</option>
              <option value="TKR">TKR</option>
              <option value="TBSM">TBSM</option>
            </select>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
  <?php require('../template/footer.php'); ?>
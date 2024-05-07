<?php require('../template/header.php'); ?>
<?php require('../template/nav.php'); ?>
<?php require('../template/sidebar.php'); ?>


<div class="main-content">
        <section class="section">]
            <div class="section-header">
                <h1>input data kelas </h1>
              </section>
              <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h1>Input Data Kelas</h1>
        <form action="action-create.php" method="POST">
          <div class="form-group">
            <label for="idKelas">ID Kelas</label>
            <input type="text" class="form-control" id="idKelas" name="idKelas"placeholder="Masukkan ID Kelas">
          </div>
          
          <div class="form-group">
            <label for="namaKelas">Nama Kelas</label>
            <input type="text" class="form-control" id="namaKelas" name="namaKelas" placeholder="Masukkan Nama Kelas">
          </div>
          
          <div class="form-group">
            <label for="kompetensiKeahlian">Pilih Kompetensi Keahlian</label>
            <select class="form-control" id="kompetensiKeahlian " name="kompetensiKeahlian">
              <option value="">Pilih Kompetensi Keahlian</option>
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
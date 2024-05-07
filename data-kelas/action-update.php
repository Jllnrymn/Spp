<?php
if(isset($_POST) > 0){
    $idKelas = $_POST['idKelas'];
    $namaKelas = $_POST['namaKelas'];
    $ompetensiKeahlian = $_POST['kompetensiKeahlian'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi,"UPDATE kelas SET nama_kelas='$namaKelas',kompetensi_keahlian='$ompetensiKeahlian' WHERE id_kelas='$idKelas' ");

    if ($result) {
        echo "<script>alert('Data Kelas berhasil ditambahkan'); window.location.href='read.php'</script>";
    }else{
        echo "<script>alert('Data Kelas gagal ditambahkan'); window.location.href='read.php'</script>";
    }
}
?>
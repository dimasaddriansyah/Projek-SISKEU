<?php
    require_once('koneksi.php');

    $koneksiObj = new Koneksi();
    $koneksi = $koneksiObj->getKoneksi();

    if($koneksi->connect_error){
        echo "Gagal Koneksi : ". $koneksi->connect_error;
    } 
    
    $nim = $_GET['nim'];

    if($nim==''){
        echo "Data Gagal di hapus!<br>";
        echo '<a href="index.php">kembali</a>';
        return;
    }

    $query = "delete from mahasiswa where nim='$nim'";

    if($koneksi->query($query)===true){
        echo "<br>Data berhasil dihapus";
    } else{
        echo '<br>Data gagal dihapus';
    }
    echo "<br>";
    echo "<a href='index.php'>Kembali ke Halaman Utama</a>";
    $koneksi->close();
?>
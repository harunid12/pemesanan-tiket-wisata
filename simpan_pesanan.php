<?php

    include "config/koneksi.php";

    $IDWisata = $_POST['IDWisata'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $nik = $_POST['nik'];
    $no_hp = $_POST['no_hp'];
    $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
    $pengunjung_dewasa = $_POST['pengunjung_dewasa'];
    $pengunjung_anak = $_POST['pengunjung_anak'];

    $q = mysqli_query($koneksi, "INSERT INTO tb_pemesanan (IDWisata, nama_lengkap, nik, no_hp, tanggal_kunjungan, pengunjung_dewasa, pengunjung_anak) VALUES ('$IDWisata', '$nama_lengkap', '$nik', '$no_hp', '$tanggal_kunjungan', '$pengunjung_dewasa', '$pengunjung_anak')");
    
    $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tb_pemesanan WHERE nik='$nik'"));

    if($q){
        session_start();
        $_SESSION['IDPemesanan'] = $data['IDPemesanan'];
        header("location:data/template.php?page=data_pemesan");
    } else{
        echo "<script>alert('Gagal menambahkan data'); window.location.href = 'index.php';</script>";
    }
?>
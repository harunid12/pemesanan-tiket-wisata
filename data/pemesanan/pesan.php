<?php 
    $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT tb_pemesanan.*, tb_wisata.* 
    FROM tb_pemesanan, tb_wisata 
    WHERE tb_pemesanan.IDWisata = tb_wisata.IDWisata
    and IDPemesanan ='$_SESSION[IDPemesanan]'"));
?>

<div class="container">
        <div class="row justify-content-around align-items-start p-5">
            <div class="card col-sm-5 shadow px-2 py-1">
                <div class="card-body">
                    <div class="card-title mb-3">
                        <h3>Pembayaran Tiket</h3>
                    </div>
                    <div class="row">
                        <p class="col-sm-4">Nama Pemesan</p>
                        <p class="col-sm-8">: <?php echo $data['nama_lengkap']; ?></p>
                    </div>
                    <div class="row">
                        <p class="col-sm-4">Nomor Identitas</p>
                        <p class="col-sm-8">: <?php echo $data['nik']; ?></p>
                    </div>
                    <div class="row">
                        <p class="col-sm-4">Nomor HP</p>
                        <p class="col-sm-8">: <?php echo $data['no_hp']; ?></p>
                    </div>
                    <div class="row">
                        <p class="col-sm-4">Tempat Wisata</p>
                        <p class="col-sm-8">: <?php echo $data['nama_wisata']; ?></p>
                    </div>
                    <div class="row">
                        <p class="col-sm-4">Pengunjung Dewasa</p>
                        <p class="col-sm-8">: <?php echo $data['pengunjung_dewasa']; ?> orang</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-4">Pengunjung anak-anak</p>
                        <p class="col-sm-8">: <?php echo $data['pengunjung_anak']; ?> orang</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-4">Harga Tiket</p>
                        <p class="col-sm-8">: Rp 10.000</p>
                    </div>
                    <div class="row">
                        <p class="col-sm-4">Total Bayar</p>
                        <p class="col-sm-8">: <?php  
                                $dewasa = hitung_dewasa($data['pengunjung_dewasa']);
                                $anak = hitung_anak($data['pengunjung_anak']);
                                $total = total_bayar($dewasa, $anak);
                                echo rupiah($total);
                            ?></p>
                    </div>
                    
                    
                </div>
        </div>
    
    </div>
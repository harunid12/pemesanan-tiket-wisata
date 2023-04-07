<?php 
    $data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT tb_pemesanan.*, tb_wisata.* 
    FROM tb_pemesanan, tb_wisata 
    WHERE tb_pemesanan.IDWisata = tb_wisata.IDWisata
    and IDPemesanan ='$_SESSION[IDPemesanan]'"));
?>

<div class="container">
        <div class="row justify-content-around align-items-start p-5">
            <div class="card col-sm-6 shadow px-2 py-1">
                <div class="card-body">
                    <h3>Data Pemesanan</h3>
                    <br>
                    <form action="?page=pesan" method="POST">
                    <div class="mb-3 row">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" readonly name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>" id="nama_lengkap">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NIK" class="col-sm-3 col-form-label">Nomor Identitas</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" readonly value="<?php echo $data['nik']; ?>" name="nik" id="NIK">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_hp" class="col-sm-3 col-form-label">Nomor HP</label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" readonly value="<?php echo $data['no_hp']; ?>" name="no_hp" id="no_hp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_wisata" class="col-sm-3 col-form-label">Tempat Wisata</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" readonly value="<?php echo $data['nama_wisata']; ?>" name="nama_wisata" id="nama_wisata">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal_kunjungan" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                        <div class="col-sm-9">
                        <input type="date" class="form-control" readonly value="<?php echo $data['tanggal_kunjungan']; ?>" name="tanggal_kunjungan" id="tanggal_kunjungan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pengunjung_dewasa" class="col-sm-3 col-form-label">Pengunjung Dewasa</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" readonly value="<?php echo $data['pengunjung_dewasa'] ; ?> Orang" name="pengunjung_dewasa" id="pengunjung_dewasa">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pengunjung_anak" class="col-sm-3 col-form-label">Pengunjung Anak</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" readonly value="<?php echo $data['pengunjung_anak'] ; ?> Orang" name="pengunjung_anak" id="pengunjung_anak">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Harga Tiket</label>
                        <div class="col-sm-9">
                        <strong>Rp. 10.000</strong>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Total Bayar</label>
                        <div class="col-sm-9">
                        <strong>
                            <?php  
                                $dewasa = hitung_dewasa($data['pengunjung_dewasa']);
                                $anak = hitung_anak($data['pengunjung_anak']);
                                $total = total_bayar($dewasa, $anak);
                                echo rupiah($total);
                            ?>
                        </strong>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Pesan Tiket</button>
                    <a href="../../tiket_wisata/index.php" class="btn btn-danger">Kembali</a>
                    </form>
                    
                </div>
            </div>
        </div>
    
    </div>
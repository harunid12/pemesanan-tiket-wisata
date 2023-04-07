<?php
    include "config/koneksi.php";
    include "config/fungsi.php";
    // include "fungsi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-around align-items-start p-5">
            <div class="card col-sm-6 shadow px-2 py-1">
                <div class="card-body">
                    <h3>Form Pemesanan</h3>
                    <br>
                    <form action="simpan_pesanan.php" method="POST">
                    <div class="mb-3 row">
                        <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NIK" class="col-sm-3 col-form-label">Nomor Identitas</label>
                        <div class="col-sm-9">
                        <input type="text" maxlength="16" class="form-control" name="nik" id="NIK">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_hp" class="col-sm-3 col-form-label">Nomor HP</label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" name="no_hp" id="no_hp">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="NIK" class="col-sm-3 col-form-label">Tempat Wisata</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="wisata" name="IDWisata" aria-label="Default select example">
                            <option value=""> --------- Pilih Wisata --------- </option>
                                <?php 
                                    $qry = mysqli_query($koneksi, "SELECT * FROM tb_wisata Order By nama_wisata Asc");
                                    while ($data = mysqli_fetch_array($qry)) {
                                    echo "<option value='$data[IDWisata]'> $data[nama_wisata] </option>";

                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Review Wisata</label>
                        <div class="col-sm-9">
                        <iframe src="" id="tempat_wisata" frameborder="0"></iframe>
                        <div id="loading" style="margin-top: 15px;">
                        <img src="images/loading.gif" width="18"> <small>Loading...</small>
                        </div>
                        </div>
                    </div> -->
                    <div class="mb-3 row">
                        <label for="tanggal_kunjungan" class="col-sm-3 col-form-label">Tanggal Kunjungan</label>
                        <div class="col-sm-9">
                        <input type="date" class="form-control" name="tanggal_kunjungan" id="tanggal_kunjungan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pengunjung_dewasa" class="col-sm-3 col-form-label">Pengunjung Dewasa</label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" name="pengunjung_dewasa" id="pengunjung_dewasa">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pengunjung_anak" class="col-sm-3 col-form-label">Pengunjung Anak</label>
                        <div class="col-sm-9">
                        <input type="number" class="form-control" name="pengunjung_anak" id="pengunjung_anak">
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
                        <strong></strong>
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Saya dan/atau rombongan telah membaca, memahami dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Hitung Total Bayar</button>
                    <button type="reset" class="btn btn-danger">Cancel  </button>
                    </form>
                    
                </div>
            </div>
        </div>
    
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="jquery/jquery-3.4.1.min.js"></script>
<script src="jquery/jquery.min.js"></script>

<!-- <script type="text/javascript">
  
    $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    $("#loading").hide();
    
    $("#wisata").change(function(){ // Ketika user mengganti atau memilih data wisata
      $("#review_wisata").hide(); // Sembunyikan dulu combobox kota nya
      $("#loading").show(); // Tampilkan loadingnya
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "get_review_wisata.php", // Isi dengan url/path file php yang dituju
        data: {wisata : $("#wisata").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          $("#loading").hide(); // Sembunyikan loadingnya

          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#review_wisata").html(response.data_review).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(thrownError); // Munculkan alert error
        }
      });
    });
  });


</script> -->

</body>
</html>

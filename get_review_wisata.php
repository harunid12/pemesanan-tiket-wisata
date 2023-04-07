<?php 

    include "config/koneksi.php";
    include "config/fungsi.php";

    $id_wisata = $_POST['wisata'];

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_wisata WHERE IDWIsata='$id_wisata'");
    $data = mysqli_fetch_array($sql);
    
    $html = "<iframe width='350' height='200' src='". getYoutubeEmbedUrl($data['review_wisata'])."' frameborder='0' allowfullscreen></iframe>";

    $callback = ['data_review'=>$html]; 

    echo json_encode($callback); 
    ?>

?>
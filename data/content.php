<?php 

if ($_GET['page']=='data_pemesan'){
	include 'pemesanan/view.php';
}elseif($_GET['page']=='pesan'){
	include 'pemesanan/pesan.php';
}
?>
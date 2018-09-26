<?php
session_start();
$hargapengiriman;
$totalharga;
$tgl=date('d-m-Y');
$pengiriman = $_POST["pengiriman"];
$belanjaan 	= $_POST["belanjaan"];
$alamat 	= $_POST["alamat"];	 
 echo "Tanggal Pembeliaan : $tgl <br><br>";
 echo "Data Alamat : $alamat";
 echo "<p>Belanjaan yang dipilih:</p>";

foreach ($belanjaan as $nilai) {
	echo "- $nilai <br />";
}

$totalBiaya = 0;

if ($pengiriman=="JNE") {
	$hargapengiriman = 10000;
}elseif ($pengiriman=="Gojek") {
	$hargapengiriman = 17000;
}elseif ($pengiriman=="J&T Express"){
	$hargapengiriman = 20000;
}


for ($i = 0; $i < count($belanjaan); $i++) { 
	if ($belanjaan[$i] == "Meja") {
		$harga = 4000000;
	} elseif($belanjaan[$i] == "Tas"){
		$harga = 5000000;
	} else {
		$harga = 300000;
	}
	$totalBiaya = $totalBiaya + $harga;
}
error_reporting(0);
echo "<br>Harga Pengiriman $pengiriman : Rp. ". number_format($hargapengiriman)."<br>";
$totalBiaya = $totalBiaya + $hargapengiriman;
$baris = count($_SESSION['daftarbelanja']);
$_SESSION['daftarbelanja'][$baris] = array(
	"belanjaan" => $belanjaan, "pengiriman" => $pengiriman, "alamat" => $alamat, "totalBiaya" => $totalBiaya
);
$daftarbelanjaan = $_SESSION['daftarbelanja'];
echo "<br>Total Harga = Rp." . number_format($daftarbelanjaan[0]['totalBiaya']);

?>
<br><br>
<a href="logout.php">Logout</a>
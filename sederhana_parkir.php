<!-- aplikasi hanya berjalan dengan menggunakan command line -->
<!-- inputan jam menggunakan format waktu 24 jam -->
<!-- inputan jam berupa integer -->
<!-- inputan nomor kendaraan berupa string  -->

<?php
// $kendaraan = "Motor";
echo ("Masukan nomor kendaraan: ");
$kendaraan = trim(fgets(STDIN));
echo ("Masukan jam masuk: ");
$jam_masuk = trim(fgets(STDIN));
echo ("Masukan jam keluar: ");
$jam_keluar = trim(fgets(STDIN));

//menghitung Lavanya parkir
$totalwaktu= $jam_keluar - $jam_masuk;

$hourdiff = round($totalwaktu);
if ($hourdiff >2 ){
		$tarif2jam = 2000;
		$selisihwaktu = $hourdiff-2;
		$tarifberikutnya = $selisihwaktu * 500;
		$totalbayar = $tarif2jam + $tarifberikutnya;
	} else {
		$totalbayar = 2000;
	}

echo ("\n===--- TARIF PARKIR KENDARAAN ---===\n");
echo ("Nomor kendaraan = $kendaraan"   );
echo ("\nJam masuk = $jam_masuk"   );
echo ("\nJam keluar = $jam_keluar"  );
echo ("\nLama parkir = $hourdiff Jam");
echo ("\nBayar = Rp. $totalbayar,-");
?>


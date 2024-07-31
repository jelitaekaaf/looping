<?php
 
 $nomorIndukKaryawan = 2; 
 $hasilEvaluasi = evaluasiKinerja($nomorIndukKaryawan);

 function evaluasiKinerja($nomorInduk) {
    if ($nomorInduk % 2 == 1) {
        return "Hasil Kinerjanya Memuaskan";
    } elseif ($nomorInduk % 20 == 0) {
        return "Hasil Kinerjanya Cemerlang";
    } elseif ($nomorInduk % 3 == 0 && $nomorInduk % 2 == 1) {
        return "Hasil Kinerjanya Istimewa";
    } 
}

echo "Nomor Induk Karyawan: " . $nomorIndukKaryawan . "<br>";
echo "Hasil Evaluasi Kinerja: " . $hasilEvaluasi;
?>
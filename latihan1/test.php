<?php 
$nilai = $_POST['nilai'];

/* if($nilai <=100 && $nilai >= 85){
    echo 'A';
} else if($nilai <=84 && $nilai >= 75){
    echo 'B';
} else if($nilai <=74 && $nilai >= 60){
    echo 'C';
} else if($nilai <=59 && $nilai >= 50){
    echo 'D';
} else if($nilai <=49 && $nilai >= 0){
    echo 'E';
}
 */

$peringkat = match (true) {
    $nilai <=100 && $nilai >= 85 => 'A',
    $nilai <=84 && $nilai >= 75 => 'B',
    $nilai <=74 && $nilai >= 60 =>'C',
    $nilai <=59 && $nilai >= 50 => 'D',
    $nilai <=49 && $nilai >= 0 => 'E'
};

echo 'Anda mendapatkan Peringkat ' . $peringkat;

?> 
<html><br> <br> <button onclick="location.href='../latihan1/main.php'" type="button">Kembali</button></html>

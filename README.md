# Kompleksitas-Algoritma-Prak-Desain-dan-Analisis-Algoritma
Program ini dibuat menggunakan bahasa pemrograman PHP

# Binary Search
Script dan hasil:
$val) { $upper = (int)(($lower + $upper) / 2 - 1); } } echo "Not found"; ?>

Hasil pencarian binary search adalah 8


# Sequential Search
Script dan hasil:
echo "Nilai yang dicari adalah $x"; 
echo "Nilai $x ditemukan!"; } else { echo "Nilai yang diinput adalah 99,20,17,8,27,5,21,10,41,11";
echo "Nilai yang dicari adalah $x";
echo "Nilai $x tidak ditemukan di dalam list!"; } ?>

Nilai yang diinput adalah 99,20,17,8,27,5,21,10,41,11 Nilai yang dicari adalah 8 Nilai 8 ditemukan di dalam list!

# Selection Search
Script dan hasil :
$my_array = array(3, 0, 9, 5, -5, 4, 2);
echo "Inputan Array :\n";
echo implode(', ',$my_array ); 

echo "\nArray yang Sudah Diurut :\n";
echo implode(', ',selection_sort($my_array)). PHP_EOL;

Inputan Array : 3, 0, 9, 5, -5, 4, 2 Array yang Sudah Diurut : -5, 0, 2, 3, 4, 5, 9

# Rata-rata
Script dan hasil:

$n1 = 4;
$n2 = 8;
$n3 = 9;
$n4 = 2;
$n5 = 9;
$n6 = 5;
$n7 = 3;
$n8 = 7;
// Proses Hitung
$jumlah = $n1 + $n2 + $n3 + $n4 + $n5 + $n6 + $n7 + $n8 ;
$hasil = $jumlah/8;
echo "Nilai rata-rata dari $n1, $n2, $n3, $n4, $n5, $n6, $n7, dan $n8 adalah " .$hasil ;

Nilai rata-rata dari 4, 8, 9, 5, 3, dan 7 adalah 5.875

# Nilau Terbesar
Script dan hasil:
 error_reporting(0);
 $nilai = Array(2,4,1,12,20,14,45,62,90,12,16,17,16,34,32,31,10);         
 $jml=count($nilai);
 for($i=0; $i<=$jml-1; $i++)
 {
  $j=$i+1;
  if($nilai[$i]>=$nilai[$j])
   {
   $j=$nilai[$j]; 
   }else{
   $temp=$nilai[$j];
   if($nilai[j]>=$temp)
    {
     $maksimal=$nilai[$j];
    }else{
     $maksimal=$temp;
    }
   }
 }
 echo 'Nilai terbesar dari bilangan array 2,4,1,12,20,14,45,62,90,12,16,17,16,34,32,31, dan 10 adalah '.$maksimal ;

Nilai terbesar dari bilangan array 2,4,1,12,20,14,45,62,90,12,16,17,16,34,32,31, dan 10 adalah 34

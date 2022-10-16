<?php
# membuat Fungsi
function hitungLuasLingkaran($jari){
    $phi = 3.14;
    $luaslingkaran = $phi * $jari * $jari;
    return $luaslingkaran;

}

// memanggil fungsi
echo hitungLuasLingkaran(5);
echo '<br>';
echo hitungLuasLingkaran(7);
echo '<br>';
echo hitungLuasLingkaran(9);

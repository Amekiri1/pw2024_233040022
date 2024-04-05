<?php

function cetak_bintang($angka) {
    $urutanAngka = 1;
    for ($i = 1; $i <= $angka; $i++) {
        echo str_repeat ('*', $i) . "<br>";
    }
}

echo cetak_bintang(3);

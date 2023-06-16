<?php

$tinggi = 5; // tinggi segitiga

// Loop untuk setiap baris
for ($i = 1; $i <= $tinggi; $i++) {
    
    // Loop untuk mencetak bintang
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }

    echo "<br>"; // Pindah ke baris berikutnya
}

?>

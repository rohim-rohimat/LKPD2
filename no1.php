<?php
    //variable text berisi string yang ingin diperiksa
    $teks = "Selamat ulang tahun yang ke-17!";

    //mencocokan semua karakter dalam string yang bukan huruf,angka atau spasi
    //pattern untuk mencocokan kata 
    preg_match_all('/[^a-zA-Z0-9\s]/' , $teks, $matches);

    //count untuk menghitung jumlah elemen dalam array
    //mencari semua simbol karakter yang bukan huruf atau angka
    if (count($matches[0]) > 0) {
        //menghilangkan duplikasi simbol
        $uniqueSymbol = array_unique($matches[0]);
        //menampilkan karakter unik yang ditemukan dipisahkan oleh koma dan spasi
        echo "Karakter yang terdapat pada kalimat : " . implode(',', $uniqueSymbol); //implode menggabungkan elemen-elemen dari array 
    } else {
        //jika simbol tidak ditemukan maka akan muncul kalimat tersebut
        echo "Tidak terdapat simbol pada kalimat.";
    }
?>
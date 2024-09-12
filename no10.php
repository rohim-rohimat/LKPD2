<?php
    function checkJawaban($nama, ...$arrJawaban) {
        $jawaban = ['A','D','C','C','B','A','E','B','A','E']; //Jawaban yang benar
        $arrBenar = [];

        //mengecek jawaban yang diberikan dengan jawaban yang benar
        foreach ($jawaban as $key => $value) {
            if ($arrJawaban[$key] == $value) {
                $arrBenar[$key] = 1; //Jawaban benar
            } else {
                $arrBenar[$key] = 0; //Jawaban salah
            }
        }

        //menampilkan hasil
        echo "Nama : $nama <b><br>";
        echo "jumlah jawaban benar : <b>" . count(array_keys($arrBenar,1)) . "<b></br>";
        echo "jumlah jawaban salah : <b>" . count(array_keys($arrBenar,0)) . "<b></br>";
    }

    checkJawaban('suzan','A','D','A','C','B','A','C','B','A','E');
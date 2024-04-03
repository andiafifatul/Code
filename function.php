<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
function greetings($nama){
    echo "Halo $nama , Selamat Datang di Sanbercode! <br>";

}

greetings("Bagas");
greetings("Tomi");
greetings("Abduh");
greetings("Andi");

echo "<br>";


echo "<h3>Soal No 2 Reverse String</h3>";

function balik ($kata1) {
    $tampung = "";
    $panjangKalimat = strlen($kata1);

    for($i = $panjangKalimat - 1; $i>=0; $i--){
        $tampung .= $kata1[$i];
    }

    return $tampung;
}

function reverseString($kata2){
    $balikata = balik($kata2);
    echo "$balikata <br>";
}

reverseString("abdul");
reverseString("Sanbercode");
reverseString("We Are Sanbers Developers");
echo "<br>";


echo "<h3>Soal No 3 Palindrome </h3>";

function palindrome($pali){
    $balikKata = balik ($pali);
    if($pali === $balikKata){
        echo "$pali => true <br>";
    }else{
        echo "$pali => false <br>";
    }
}

palindrome("civic") ; // true
palindrome("nababan") ; // true
palindrome("jambaban"); // false
palindrome("racecar"); // true


echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai ($nilai){
    if($nilai >= 85 && $nilai < 100){
        return "$nilai => Sangat Baik <br>";
    }else if($nilai >= 70 && $nilai < 85){
        return "$nilai => Baik <br>";
    }else if($nilai >= 60 && $nilai < 70){
        return "$nilai => Cukup <br>";
    }else if ($nilai >= 40 && $nilai < 60){
        return "$nilai => Kurang <br>";
    }
}

echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang


?>


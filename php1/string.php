<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        $string = "PHP is never old";

        echo "String : " . $string . "<br>";
        echo "Panjang String : " . strlen($string) . "<br>";
        echo "Jumlah kata : " . str_word_count($string) . "<br>";
        "<br>";

        $first_sentence = "Hello PHP!"; 
        echo "first sentence = " . $first_sentence . "<br>";
        echo "Panjang String : " . strlen($first_sentence) . "<br>";
        echo "Jumlah kata : " . str_word_count($first_sentence) . "<br>";

        $second_sentence = "I'm ready for the challenges";
        echo "second sentence = " . $second_sentence . "<br>";
        echo "Panjang String : " . strlen($second_sentence) . "<br>";
        echo "Jumlah kata : " . str_word_count($second_sentence) . "<br>";
 
        echo "<h3> Soal No 2</h3>";
        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        echo "Kata kedua: " . substr($string2, 1, 5) . "<br>" ;
        echo "Kata ketiga: " . substr($string2, 6, 8) . "<br>" ;
       
        echo "<h3> Soal No 3 </h3>";
        $string3 = "PHP is old but sexy!";
        
        echo "String: ". $string3.  "<br>" ; 
        echo "Ganti kalimat String : " . str_replace("sexy!", "awesome", $string3);

    ?>
</body>
</html>
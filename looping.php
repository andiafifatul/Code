<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";

        echo "LOOPING PERTAMA";
        echo "<br>";
        $a = 2;
        while($a <= 20) {
            echo $a . " - I Love PHP <br>";
            $a+=2;
        }
        
        echo "LOOPING KEDUA";
        echo "<br>";
        for($b = 20; $b >= 2; $b-=2) {
            echo $b . " - I Love PHP <br>";

        }


        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        
        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        
        // Lakukan Looping di sini
        foreach($numbers as $value) {
            $rest[] = $value % 5; 
        };
        
        echo "<br>";
        echo "Array sisa baginya adalah 5:  "; 
        echo "<br>";
        print_r($rest);


        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. 
            Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 

            Jangan ubah variabel $items

        */
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];
        
        foreach($items as $indexArray){
            $users = [
                "id" => $indexArray[0],
                "name" => $indexArray[1],
                "price" => $indexArray[2],
                "description" => $indexArray[3],
                "source" => $indexArray[4]
            ];
            print_r($users);
            echo "<br>";
        }
        
        echo "<h3>Soal No 4 Asterix </h3>";
        /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */
        // k=6
        for ($k=0; $k<5; $k++){
            for ($l=0; $l <= $k; $l++) {
                echo "*";
            }
            echo "<br>";
        }
             
    ?>

</body>
</html>
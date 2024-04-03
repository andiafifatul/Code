<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $Kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; 
    $Adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
    
    print_r($Kids);
    echo "<br>";
    print_r($Adults);
    echo "<br>";

    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($Kids); 
    echo "<ul>";
    echo "<li>" . $Kids[0] . "</li>";
    echo "<li>" . $Kids[1] . "</li>";
    echo "<li>" . $Kids[2] . "</li>";
    echo "<li>" . $Kids[3] . "</li>";
    echo "<li>" . $Kids[4] . "</li>";
    echo "<li>" . $Kids[5] . "</li>";
    echo "</ul>";

    echo "Total Adults: " . count($Adults); 
    echo "<ul>";
    echo "<li>" . $Adults[0] . "</li>";
    echo "<li>" . $Adults[1] . "</li>";
    echo "<li>" . $Adults[2] . "</li>";
    echo "<li>" . $Adults[3] . "</li>";
    echo "<li>" . $Adults[4] . "</li>";
    echo "</ul>";


    echo "<h3> Soal 3</h3>";

    $arrayMulti = [
        ["Name" => "Will Byers", "Age" => "12", "Aliases" =>  "Will the Wise", "Status" => "Alive"],
        ["Name" => "Mike Wheeler", "Age" => "12", "Aliases" => "Dungeon Master", "Status" => "Alive"],
        ["Name" => "Jim Hopper", "Age" => "43", "Aliases" => "Chief Hopper", "Status" => "Deceased"],
        ["Name" => "Eleven", "Age" => "12", "Aliases" => "El", "Status" => "Alive"]
    ];

    echo "<pre>";
    print_r($arrayMulti);
    echo "</pre>";

    
    ?>
</body>

</html>
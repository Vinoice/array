<?php 
    $cars = array("Audi","Lamborghuni","Ferrary","Ducatti");
    $negara = array("Malaysia","Indonesia","Korea","Jepang");
    $kota = array("Kuala Lumpur","Jakarta","Seoul","Tokyo");

    // echo "I Like " . $cars[1] . "," . $cars[2] . " and " . $cars[0] ." ". $cars[3] .".";
    // echo "<br>";
    // var_dump ($negara);
    // echo "<br>";
    // print_r ($kota);

    var_dump ($kota);
    $kota[] = "Bogor";
    echo "<br>";
    var_dump ($kota);
    $kota[4] = "Jayapura";
    echo "<br>";
    var_dump ($kota);
 
?>
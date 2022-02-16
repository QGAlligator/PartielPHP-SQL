<?php
    function table($nbre) {
        $nbre1 = $nbre * 1;
        $nbre2 = $nbre * 2;
        $nbre3 = $nbre * 3;
        $nbre4 = $nbre * 4;
        $nbre5 = $nbre * 5;
        $nbre6 = $nbre * 6;
        $nbre7 = $nbre * 7;
        $nbre8 = $nbre * 8;
        $nbre9 = $nbre * 9;
        $nbre10 = $nbre * 10;
        echo "Table de : ".$nbre. "\n"
        .$nbre." x 1 = ".$nbre1."\n"
        .$nbre." x 2 = ".$nbre2."\n"
        .$nbre." x 3 = ".$nbre3."\n"
        .$nbre." x 4 = ".$nbre4."\n"
        .$nbre." x 5 = ".$nbre5."\n"
        .$nbre." x 6 = ".$nbre6."\n"
        .$nbre." x 7 = ".$nbre7."\n"
        .$nbre." x 8 = ".$nbre8."\n"
        .$nbre." x 9 = ".$nbre9."\n"
        .$nbre." x 9 = ".$nbre10."\n";  // le saut de ligne ne veut pas marcher je sais pas pourquoi
    }
    $compteur = 0;
    while($compteur < 10) {
        table($compteur);
        $compteur = $compteur + 1;
    }
?>
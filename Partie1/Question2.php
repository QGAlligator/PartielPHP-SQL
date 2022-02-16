<?php
    function somme($nbre) {
        $somme = 0;
        while($nbre != 0) {
            $somme = $somme + $nbre;
            if($nbre != 1) {
                echo $nbre." + ";
            }
            if($nbre == 1) {
                echo $nbre;
            }
            $nbre = $nbre - 1;
        }
        echo " = ".$somme;
    }
    somme(5)
?>
<?php

    function assertEquals($wynikOczekiwany, $wynikAktualny, $wiadomosc = ""){

        if($wynikOczekiwany === $wynikAktualny){

            echo "TEST PRZESZEDŁ: $wiadomosc \n";
            echo "Wartośc oczekiwana: $wynikOczekiwany \n";
            echo "Wartość otrzymana: $wynikAktualny \n";

        }else{

            echo "BŁĄD - TEST NIE PRZESZEDŁ: $wiadomosc \n";
            echo "Wartośc oczekiwana: $wynikOczekiwany \n";
            echo "Wartość otrzymana: $wynikAktualny \n";

        }

    }

?>
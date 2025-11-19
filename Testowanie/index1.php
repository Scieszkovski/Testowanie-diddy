<?php
include './assert.php';

foreach(glob("tests/*.php") as $file){

    echo "=== URUCHOMIONY PLIK $file ===\n" require $file;
    echo "\n";

}

/*
class numberCheck{

    public function czyParzysta($liczba){

        return liczba % 2 === 0;

    }

}

$numCheckObject = new numberCheck();

$test1 = numCheckObject->czyParzysta(5);
$test2 = numCheckObject->czyParzysta(4);
$test3 = numCheckObject->czyParzysta(20);

var_dump(test1, test2, test3). "<br>";

assertEquals(true, true, "TEST PRZESZEDŁ");
assertEquals(true, $test2);
*/

?>
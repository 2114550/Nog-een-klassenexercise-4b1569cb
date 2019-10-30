<?php
echo "Wie zitten er in je klas?".PHP_EOL;
$klas = readline();
$explode = explode(" ",$klas);
foreach($explode as $final){
    echo $final.PHP_EOL;
}
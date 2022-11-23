<?php
/* Alessandro Pietracatella (ID: Bandy92), Advent Of Code 2015, Day One. Link: https://adventofcode.com/2015/day/1
   Qualora il link non fosse consultabile, 
   per leggere la traccia del problema è possibile consultare il file "Traccia Day 1 - Parte 1.txt */

// variabili 
$somma=0;

// richiedo il file "input_1imo_Step.php" (al suo interno c'è il primo codice input)
require 'input_1imo_Step.php';

// alla parentesi aperta diamo il valore "1" e alla parentesi chiusa diamo il valore "-1"
if (isset($input1) && !empty($input1)) {
    $assegnazioni = ['(' => 1, ')' => -1];
    $array = str_split($input1);
    
// ciclo per analizzare e calcolare
    foreach ($array as $a) {
        $somma += $assegnazioni[$a]; } }

// visualizziamo la somma
echo $somma;

?>
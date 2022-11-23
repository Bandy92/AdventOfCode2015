<?php 
/* Alessandro Pietracatella (ID: Bandy92), Advent Of Code 2015, Day One. Link: https://adventofcode.com/2015/day/1
   Qualora il link non fosse consultabile, 
   per leggere la traccia del problema è possibile consultare il file "Traccia Day 1 - Parte 2.txt */

// variabili 
$somma=0;
$n=0;
$i=0;

// richiedo il file "input_2ndo_Step.php" (al suo interno c'è il secondo codice input)
require 'input_2ndo_Step.php';

// alla parentesi aperta diamo il valore "1" e alla parentesi chiusa diamo il valore "-1"
if (isset($input2) && !empty($input2)) {
    $assegnazioni = ['(' => 1, ')' => -1];
    $array = str_split($input2);
	
// doppio ciclo per analizzare e calcolare, poi visualizziamo il risultato
		foreach ($array as $a) {
		$somma = $somma + $assegnazioni[$a];
		$n++;
		if ($somma == -1) {
        while ($i < 1) {
        echo $n;
        $i++; 	}			
		 } } } 
		 
?>



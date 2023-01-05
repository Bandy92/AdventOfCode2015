<?php
/* Alessandro Pietracatella (ID: Bandy92), Advent Of Code 2015, Day Two. Link: https://adventofcode.com/2015/day/2
   Qualora il link non fosse consultabile, 
   per leggere la traccia del problema è possibile consultare il file "Traccia Day 2 - Parte 1.txt */
   
   
// Assegniamo le variabili (partire da "-4" con il primo elemento è strategico, perchè così possimo bypassare lo spazio bianco (che è quello che porta a capo ogni tripletta di numeri accompagnati dalla "x") dopo ogni coppia di 3 numeri)
$ColonnaLunghezza=-4; $ColonnaLarghezza=-3; $ColonnaAltezza=-2;
$Area1=0; $Area2=0; $Area3=0; $ValoreMinimoTraLeTreAree=0; $SommaAreePrimoStep=0; $SommaAreeSecondoStep=0;

// Richiediamo il file "input_1imo_Step.php" (al suo interno c'è il primo codice input)
require 'input_1imo_Step.php';

// Sistemiamo il codice in input (per sicurezza inserisco anche delle voci extra come "\t" ad esempio, non si sa mai)
$array = explode("x", str_replace(array("\n", "\t", "\r", "\a"), "x", $input1));

// Impostiamo la partenza e l'arrivo del ciclo. Dobbiamo utilizzare per sicurezza un "do while" perchè un "count" potrebbe non essere interpretato bene, stessa cosa per le varianti di "var_dump". La fine va calcolata dividendola per 4 perchè ricordiamo che sono 3 numeri accompagnati da una "x" e uno spazio vuoto che ne rappresenta il fatto che ad ogni tripletta di numeri ci sia una nuova linea 
$Inizio = 0;
$Fine = ((count($array))/4);

do {	
// Prepariamo le progressioni
   $ColonnaLunghezza=$ColonnaLunghezza+4;
   $ColonnaLarghezza=$ColonnaLarghezza+4;
   $ColonnaAltezza=$ColonnaAltezza+4;
   $Inizio = $Inizio + 1;
 
// Calcoliamo le aree
   $Area1 = 2 * $array[$ColonnaLunghezza] * $array[$ColonnaLarghezza]; 
   $Area2 = 2 * $array[$ColonnaLarghezza] * $array[$ColonnaAltezza];  
   $Area3 = 2 * $array[$ColonnaAltezza] * $array[$ColonnaLunghezza]; 
   $SommaAreePrimoStep = $SommaAreePrimoStep + $Area1 + $Area2 + $Area3;
  
// Estraiamo l'area minore, senza il x2, di ogni singolo parallelepipedo e sommiamola per il secondo step
   $ValoreMinimoTraLeTreAree = $ValoreMinimoTraLeTreAree + min($array[$ColonnaLunghezza] * $array[$ColonnaLarghezza], $array[$ColonnaLarghezza] * $array[$ColonnaAltezza], $array[$ColonnaAltezza] * $array[$ColonnaLunghezza]);
   $SommaAreeSecondoStep= $ValoreMinimoTraLeTreAree + $SommaAreePrimoStep;

} while ($Inizio <= $Fine);


// Risultato finale
echo $SommaAreeSecondoStep;

?>

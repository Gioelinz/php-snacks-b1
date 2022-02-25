<?php
/* Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. */

$array_nums = [];

$total_nums = 15;


while (count($array_nums) < $total_nums) {
    $i = 0;
    $array_nums[] = rand(1, 15);
    /* Array unique rimuove elementi duplicati dell'array */
    $array_nums = array_unique($array_nums);

    $i++;
}

var_dump($array_nums);

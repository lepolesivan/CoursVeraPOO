<?php

//Creation d'un instance de mon objet;
$date = new DateTime();

//Voir dans mon objet
var_dump($date);
echo '<br>';

//Voir le timezone de mon objet
var_dump($date->getTimezone());
echo '<br>';

//Mofifier ma date et ajouter un jour
$date->modify('+1 day');
//Revoir dans mon objet
var_dump($date);
echo '<br>';

//Modifier la date et le format
$formatDate = $date->modify('+1 day')->format('d/m/Y');
echo '<pre>';
var_dump($formatDate);
echo '</pre>';
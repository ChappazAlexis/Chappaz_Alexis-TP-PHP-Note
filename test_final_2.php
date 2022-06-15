<?php

$exoFile = fopen("ExerciceCSVScript.csv", "r");
$reducSalaireCSV =fopen("reduc_salaire.csv","w+");
$tab=[];
$moreThan50 = 0;


for ($i=0; $i <100 ; $i++) { 
    $tab[]=fgetcsv($exoFile,100);
}

    foreach ($tab as $value ) {
        $surname = $value[0];
        $name = $value[1];
        $salaire = intval($value[4]);
        $reducSalaire = $salaire*0.80;

         if ($value[2] >= 50){
            $moreThan50 ++;
            $salarySum = (array_sum(array_column($tab, 4)));

            $value = ["$name $surname " . ":" . " $reducSalaire"];
            fputcsv($reducSalaireCSV,$value);
        }
    }

    echo ("\nPersonne ayant plus de 50 ans : $moreThan50");
    echo ("\nSalaire des personnes de plus de 50 ans : $salarySum");

fclose($reducSalaireCSV);
fclose($exoFile);
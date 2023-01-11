<?php
$years = [1970, 1980, 1990, 2000, 2005, 2010];
$originalData = [
    'Landwirtschaft, Forstwirtschaft, Fischerei' => [10.7, 14.6, 18.1, 23.4, 17.8, 19.5],
    'warenproduzierendes Gewerbe' => [131.3, 247.3, 385, 465.3, 523.6, 532.2],
    'Baugewerbe' => [26.2, 50.2, 66.7, 96.2, 78.1, 92.6],
    'Handel, Verkehr, Gastgewerbe' => [62.4, 130.6, 207, 337.3, 365.4, 385.3],
    'Finanzierung, Vermietung, Unternehmensdienstleister' => [45.2, 132.7, 289.1, 510.9, 590.2, 681.8],
    'öffentliche + private Dienstleister' => [49.6, 141.7, 232.3, 423, 452.4, 528.8]];

$sectors = []; /*['Landwirtschaft, Forstwirtschaft, Fischerei', 'warenproduzierendes Gewerbe', 'Baugewerbe',
 'Handel, Verkehr, Gastgewerbe' 'Finanzierung, Vermietung, Unternehmensdienstleister', 'öffentliche + private Dienstleister']*/
foreach ($originalData as $key => $value) {
    array_push($sectors, $key);
}


//Wertschoepfung

$addedValue = [];
for ($i = 0; $i < count($originalData); $i++) {
    $sum = 0;
    foreach ($originalData as $key => $value) {
        $sum += $value[$i];
    }
    array_push($addedValue, $sum);
}


//die relativen Anteile

$relProportion = [];
foreach ($originalData as $data) {
    $container = [];
    $i = 0;
    foreach ($data as $key => $value) {
        $proportion = 0;
        $proportion = round($value / $addedValue[$i] * 100, 1);
        $i++;
        array_push($container, $proportion);
    }

    array_push($relProportion, $container);
}

$relProportionData = [];
for ($i = 0; $i < count($sectors); $i++) {
    $relProportionData[$sectors[$i]] = $relProportion[$i];
}


//die indizierte Entwicklung


$relDevelopment = [];

foreach ($originalData as $key => $value) {
    $container = [];

    for ($i = 0; $i < count($value); $i++) {
        $development = 0;
        if ($i == 0) {
            $development = 100;
        } else {
            $development = round($value[$i] / $value[0] * 100, 1);
        }
        array_push($container, $development);
    }
    array_push($relDevelopment, $container);
}
$relDevelopmentData = [];
for ($i = 0; $i < count($sectors); $i++) {
    $relDevelopmentData[$sectors[$i]] = $relDevelopment[$i];
}


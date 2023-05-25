<?php
// deel 1
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];
$myArray[] = 'metro';

foreach ($myArray as $array) {
    echo $array . PHP_EOL;
}

// deel 2
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];
$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];
echo "1. Het array heeft " . count($myArray) . " elementen.";
// Een element toevoegen aan het array
$myArray[] = 'boot';
echo "1. Het array heeft " . count($myArray) . " elementen.";

//deel 3
// regel 2: bar
// regel 5: 4
// regel 8: Toyota
// regel 9: 3
// regel 12: 5
// regel 19: five

// deel 4A
// 1. $gemiddelde = array_sum($cijferphp)/count($cijferphp);
// 2. echo round($gemiddelde, 1);

// deel 4B
// 6 en 7 samen dan is de code korter.
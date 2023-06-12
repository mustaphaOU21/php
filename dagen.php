<?php

// Opdracht 1
$tijd = date("H:i");

if ($tijd < "12:00") {
    echo "Goedemorgen";
} elseif ($tijd >= "12:00" && $tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}

// opdracht 2

function GemiddeldeDagen($getal1, $getal2)
{
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}

GemiddeldeDagen(5, 10);


// Opdracht 3

function dagenTotEindeJaar()
{
    $huidigeDatum = date_create();
    $eindeJaar = date_create(date("Y") . "-12-31");
    $verschil = date_diff($huidigeDatum, $eindeJaar);

    return $verschil->format("%a");
}

echo "Aantal dagen tot het einde van het jaar: " . dagenTotEindeJaar();

// Opdracht 4

function berekenTotaleLengte($strings)
{
    $totaleLengte = 0;

    foreach ($strings as $string) {
        $totaleLengte += strlen($string);
    }

    return $totaleLengte;
}

$array = ["Hallo", "Wereld"];
echo "Totale lengte: " . berekenTotaleLengte($array);

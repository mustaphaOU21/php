<?php
// opdracht 1
for ($i = 0; $i <= 50; $i++) {
    echo $i . PHP_EOL;
}

// opdracht 2
$klasgenoten = array(
    "Jan",
    "Piet",
    "Klaas",
    "Marie",
    "Linda",
    "Hans",
    "Emma",
    "Sophie",
    "Tom",
    "Lisa"
);

foreach ($klasgenoten as $naam) {
    echo $naam . "<br>";
}

// opdracht 3
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

$maandCount = count($maanden);

for ($i = 0; $i < $maandCount; $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';
}

// opdracht 4

foreach ($maanden as $maand) {
    echo $maand . "<br>";
}

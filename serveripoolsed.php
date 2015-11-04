<?php

//Massiiv
$person = array(
    "firstname" => "Robert",
    "lastname" => "Reinapu",
    "age" => "19"

);
//boolean
$eesnimi_algab_vokaaliga = false;

//Tingimused
if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};

echo "<p>" . $person['firstname'] . " " . $person['lastname'] . " (" . $person['age'] . ")</p>";


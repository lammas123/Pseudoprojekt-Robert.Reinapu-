<?php

//Massiiv
/*$person = array(
    "firstname" => "Robert",
    "lastname" => "Reinapu",
    "age" => "19"

); */

//boolean
$eesnimi_algab_vokaaliga = false;

//Tingimused
if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};

class isik
{
    var $firstname = "Robert";
    var $lastname = "Reinapu";
    var $age = 19;
    var $sex = "<br /> Male";
}

$Robert = new isik;


echo "<p>" . $Robert->firstname . " " . $Robert->lastname . " (" . $Robert->age . ") " . $Robert->sex . "</p>";


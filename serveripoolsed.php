<?php


class isik
{
    var $firstname = "Robert";
    var $lastname = "Reinapu";
    var $age = 19;
    var $sex = "<br /> Male";
}

$Robert = new isik;

//Funktsioon
$vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü', 'a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');
if (in_array(substr($Robert->firstname, 0, 1), $vowels)) {
    $eesnimi_algab_vokaaliga = true;
} else {
    $eesnimi_algab_vokaaliga = false;
}


//Tingimused
if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};


echo "<p>" . $Robert->firstname . " " . $Robert->lastname . " (" . $Robert->age . ") " . $Robert->sex . "</p>";


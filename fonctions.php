<?php

// fonction simple
function saluer() {
    echo "Bonjour tout le monde !<br>";
}

saluer();

// fonction 
function direBonjour($nom) {
    echo "Bonjour " . $nom . "<br>";
}

direBonjour("Imane");


// fonction avec return
function addition($a, $b) {
    return $a + $b;
}

echo addition(5, 3) . "<br>";


// paramètre par défaut
function bienvenue($nom = "visiteur") {
    echo "Bienvenue " . $nom . "<br>";
}

bienvenue();
bienvenue("Sara");

// variable globale
$site = "MonSite";

function afficherSite() {
    global $site;
    echo $site . "<br>";
}

afficherSite();

// variable static
function incrementer() {
    static $i = 0;
    $i++;
    echo $i . "<br>";
}

incrementer();
incrementer();
incrementer();

?>

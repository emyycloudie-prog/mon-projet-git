<?php

// ---------- Étape 1 : Tableau simple ----------

$animaux = ["Chat", "Chien", "Lapin"];
echo "Premier animal : " . $animaux[0] . "<br><br>";


// ---------- Étape 2 : Parcourir un tableau simple ----------

foreach ($animaux as $animal) {
    echo "Animal : " . $animal . "<br>";
}

echo "<br>";


// ---------- Étape 3 : Tableau associatif ----------

$voiture = [
    "marque" => "Toyota",
    "modele" => "Corolla",
    "annee"  => 2020
];

echo "Marque : " . $voiture["marque"] . "<br>";
echo "Modèle : " . $voiture["modele"] . "<br>";
echo "Année : " . $voiture["annee"] . "<br><br>";


// ---------- Étape 4 : Ajouter et supprimer ----------

$fruits = ["Pomme", "Banane"];
array_push($fruits, "Mangue"); // ajouter
unset($fruits[1]);             // supprimer Banane

foreach ($fruits as $fruit) {
    echo "Fruit : " . $fruit . "<br>";
}

echo "<br>";


// ---------- Étape 5 : Compter les éléments ----------

echo "Nombre de fruits : " . count($fruits);

?>

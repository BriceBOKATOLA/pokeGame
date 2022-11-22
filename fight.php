
<?php
require_once './classes/Pokemon.php';
require_once './classes/Otherpkm.php';
require_once './function.php';

$pkmPlayer = ['Dracaufeu', 'Tortank', 'Chenipan'];
$pkmComputer = ['Florizarre', 'Métamorphe', 'Pikachu'];


// Ally
$ally = [
    $pkmAlly1 = new Otherpkm("Feu", "Dracaufeu", 350),
    $pkmAlly2 = new Otherpkm("Eau", "Tortank", 350),
    $pkmAlly3 = new Otherpkm("Insecte", "Chenipan", 350)
];

// Ennemy
$ennemy = [
    $pkmEnnemy1 = new Otherpkm("Plante", "Florizarre", 350),
    $pkmEnnemy2 = new Otherpkm("Normal", "Métamorphe", 350),
    $pkmEnnemy3 = new Otherpkm("Electrique", "Pikachu", 350)
];

// appel de la fonction combat
attack($ally[0], $ennemy[0]);




?>
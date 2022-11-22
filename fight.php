
<?php
require_once './classes/Pokemon.php';
require_once './classes/Otherpkm.php';
require_once './function.php';

$pkmPlayer = ['Dracaufeu', 'Tortank', 'Chenipan'];
$pkmComputer = ['Florizarre', 'Métamorphe', 'Pikachu'];



$pkmAlly = new Otherpkm("Plante", "Florizarre", 350);
$pkmEnnemy = new Otherpkm("Feu", "Dracaufeu", 350);

// appel de la fonction combat
attack($pkmAlly, $pkmEnnemy);




?>

<?php
require_once './classes/Pokemon.php';
require_once './classes/Otherpkm.php';
require_once './function.php';

$pkmPlayer = ['Dracaufeu', 'Tortank', 'Zoroark'];
$pkmComputer = ['Florizarre', 'Rayquaza', 'Pikachu'];


$pkmOne = new Otherpkm("Plante", "Bulbizard", 350, 200);
$pkmTwo = new Otherpkm("Feu", "Salamèche", 350, 200);






// appel de la fonction combat 
attack($pkmOne, $pkmTwo);


// attack($pkmOne, $pkmTwo);

?>

<!-- Plan : -->
<!-- Auto combat -> pokemon mort -> bouton pour relancer combat 2 -> etc... -> recommencer -->
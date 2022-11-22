<?php 
// $base = "https://pokeapi.co/api/v2/pokemon" ;
// $id = 1;
// $data = file_get_contents($base.$id.'/');
// $pokemon = json_decode($data);
// var_dump($pokemon);
// echo $pokemon->name."<br>";

// Fonction attaque 1v1
function attack($currentAlly, $currentEnnemy) {
    $tour = 0;
    while ($currentAlly->getHealth() > 0 && $currentEnnemy->getHealth() > 0) {
        $tour = $tour + 1;
        echo '<p><b>Tour : ' . $tour . '</b></p>';
  
        if ($currentAlly->getHealth() > 0 && $currentEnnemy->getHealth() > 0) {
            // pkm 2 attaque
            $currentAlly->attacked($currentEnnemy->attack(), $currentEnnemy->getType());

            echo '<p>Dégâts ennemie : ' . $currentAlly->getDamageSuffured() . '</p>';
            echo '<p>Vie ennemie : ' . $currentEnnemy->getHealth() . '</p>';

            if (!($currentAlly->getHealth() <= 0) && !($currentEnnemy->getHealth() <= 0)){
                // pkm 1 attaque
                $currentEnnemy->attacked($currentAlly->attack(), $currentAlly->getType());

                echo '<p>Dégâts allié : ' . $currentEnnemy->getDamageSuffured() . '</p>';
                echo '<p>Vie allié : ' . $currentAlly->getHealth() . '</p>';
            }
        }

            if ($currentAlly->getHealth() <= 0) {
                echo '<b>Le pokémon allié est hors combat !</b>';
            }
            if ($currentEnnemy->getHealth() <= 0) {
                echo '<b>Le pokémon ennemie est hors combat !</b>';
            }
            else {
                echo '<hr>';
            }

    }
}
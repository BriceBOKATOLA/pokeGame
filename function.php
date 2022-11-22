<?php 
// $base = "https://pokeapi.co/api/v2/pokemon" ;
// $id = 1;
// $data = file_get_contents($base.$id.'/');
// $pokemon = json_decode($data);
// var_dump($pokemon);
// echo $pokemon->name."<br>";

// Fonction attaque 1v1
function attack($currentAlly, $currentEnnemy) {
    while ($currentAlly->getHealth() > 0 && $currentEnnemy->getHealth() > 0) {
        // var_dump($currentAlly);
        // var_dump($currentEnnemy);
        if ($currentAlly->getHealth() > 0 && $currentEnnemy->getHealth() > 0) {
            // pkm 2 attaque
            $currentAlly->attacked($currentEnnemy->attack());

            echo '<p>Dégâts ennemie : ' . $currentEnnemy->getDamage() . '</p>';
            echo '<p>Vie ennemie : ' . $currentEnnemy->getHealth() . '</p>';

            if (!($currentAlly->getHealth() <= 0) && !($currentEnnemy->getHealth() <= 0)){
                // pkm 1 attaque
                $currentEnnemy->attacked($currentAlly->attack());

                echo '<p>Dégâts allié : ' . $currentAlly->getDamage() . '</p>';
                echo '<p>Vie allié : ' . $currentAlly->getHealth() . '</p>';
            }


            if ($currentAlly->getHealth() <= 0) {
                echo 'Le pokémon allié est hors combat !';
            }
            if ($currentEnnemy->getHealth() <= 0) {
                echo 'Le pokémon ennemie est hors combat !';
            }
            else {
                echo '<hr>';
            }

        }
    }
}
<?php 

// Fonction attaque 1v1
function attack($currentAlly, $currentEnnemy) {
    $tour = 0;
    while ($currentAlly->getHealth() > 0 && $currentEnnemy->getHealth() > 0) {
        $tour = $tour + 1;
        echo '<p><b>Tour : ' . $tour . '</b></p>';
  
        if ($currentAlly->getHealth() > 0 && $currentEnnemy->getHealth() > 0) {
            // pkm 2 attaque
            $currentAlly->attacked($currentEnnemy->attack(), $currentEnnemy->getType());

            echo '<p>Dégâts de '. $currentEnnemy->getName() . ' : ' . $currentAlly->getDamageSuffured() . '</p>';
            echo '<p>Vie de '. $currentEnnemy->getName() . ' : ' . $currentEnnemy->getHealth() . '</p>';

            if (!($currentAlly->getHealth() <= 0) && !($currentEnnemy->getHealth() <= 0)){
                // pkm 1 attaque
                $currentEnnemy->attacked($currentAlly->attack(), $currentAlly->getType());

                echo '<p>Dégâts de '. $currentAlly->getName() . ' : ' . $currentEnnemy->getDamageSuffured() . '</p>';
                echo '<p>Vie de '. $currentAlly->getName() . ' : ' . $currentAlly->getHealth() . '</p>';
            }
        }

        if ($currentAlly->getHealth() <= 0) {
            $currentAlly->setCombatStatus(false);
            echo '<b>Le pokémon allié est hors combat !</b>';
        }
        if ($currentEnnemy->getHealth() <= 0) {
            $currentEnnemy->setCombatStatus(false);
            echo '<b>Le pokémon ennemie est hors combat !</b>';
        }
        else {
            echo '<hr>';
        }
    }
    
}
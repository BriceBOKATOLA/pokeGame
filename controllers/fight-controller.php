<?php

$currentAlly = $_GET['pkmone'];
$currentEnnemy = $_GET['pkmtwo'];

if ($currentAlly->getHealth() > 0 && $currentEnnemy->getHealth() > 0) {
    $currentAlly->attacked($currentEnnemy->attack());

    echo $currentEnnemy->getDamage();
    echo '<br>';
    echo $currentEnnemy->getHealth();
    echo '<br>';
    echo $currentAlly->getHealth();
    echo '<br>';
    if ($currentAlly->getHealth() <= 0) {
        echo 'Le pokémon est mort !';
    }
    else {
        echo '<hr>';
    }

}
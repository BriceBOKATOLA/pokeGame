<?php

if (isset($_GET['Envoyer'])) {
    $_GET = $pokemons;
        echo "vous avez selectionné" . ':  '.'<br>'. $pokemons['choix'].'<br>'.' '.$pokemons['pkm1'].'<br>'.' '.$pokemons['pkm2']." comme pokemon";
     }

<?php

// Vérification des données envoyer dans l'url
if ((isset($_GET['pkm1']) && isset($_GET['pkm2']) && isset($_GET['pkm3'])) && ($_GET['pkm1'] != '' && $_GET['pkm2'] != '' && $_GET['pkm3'] != '')) {
    // On ouvre une session
    session_start();
    $pkmPlayer = [$_GET['pkm1'], $_GET['pkm2'], $_GET['pkm3']];

    // On met le tableau avec les valeurs dans une variable SESSION
    $_SESSION['pkmPlayer'] = $pkmPlayer;
    // On redirige vers le combat
    header("Location: ../fight.php");
}
// Sinon on redirige vers la page choose_pokemon
else {
    header("Location: ../choose_pokemon.php");
}

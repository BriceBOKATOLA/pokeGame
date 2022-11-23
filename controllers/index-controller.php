<?php

// On vérifie si trainername est rempli
if(isset($_GET['trainername']) && $_GET['trainername'] != ''){
    session_start();
    $_SESSION['trainername'] = $_GET['trainername'];
    echo $_SESSION['trainername'];
    // On continue la navigation
    header("Location: ../choose_pokemon.php");
}
// Sinon on reviens à la page index
else {
    header("Location: ../index.php");
}
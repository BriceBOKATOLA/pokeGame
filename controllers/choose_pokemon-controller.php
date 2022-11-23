<?php

if (isset($_GET['pkm1']) && isset($_GET['pkm2']) && isset($_GET['pkm3'])) {
    session_start();
    $pkmPlayer = [$_GET['pkm1'], $_GET['pkm2'], $_GET['pkm3']];

    $_SESSION['pkmPlayer'] = $pkmPlayer;
    header("Location: ../fight.php");
}
else {
    header("Location: ../index.php");
}


<?php
require_once './classes/Pokemon.php';
require_once './classes/Otherpkm.php';
require_once './function.php';

$pkmPlayer = ['Dracaufeu', 'Tortank', 'Chenipan'];
$pkmComputer = ['Florizarre', 'Métamorphe', 'Pikachu'];


// Ally
$ally = [
    $pkmAlly1 = new Otherpkm("Feu", "Dracaufeu", 350),
    $pkmAlly2 = new Otherpkm("Eau", "Tortank", 350),
    $pkmAlly3 = new Otherpkm("Insecte", "Chenipan", 350)
];

// Ennemy
$ennemy = [
    $pkmEnnemy1 = new Otherpkm("Plante", "Florizarre", 350),
    $pkmEnnemy2 = new Otherpkm("Normal", "Métamorphe", 350),
    $pkmEnnemy3 = new Otherpkm("Electrique", "Pikachu", 350)
];

// appel de la fonction combat
attack($ally[0], $ennemy[0]);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fight page</title>
    <meta name="description" content="">
    <!-- appel cdn reset css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
        integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- appel de boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- appel dosier css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- appel dossier JavaScript -->
    <script async src="./assets/js/script.js"></script>
</head>
<body>
     
    <!---------------------------------------------------------------Contenu principal------------------------------------------------------------->
    <main class="site-content">
        <div class="container-fight">
            <div class="pokemon-bottom pokemon">
                <img src="./assets/img/salameche.png">
            </div>
            <div class="pokemon-top pokemon">
                <img src="./assets/img/tortank.png">
            </div>
            <div class="card_pokemon_top">
            <div class="item-card-top">
                    <div class="name-level">
                        <p class="name-pokemon"><?= $ennemy[0]->getName() ?></p>
                        <p class="level-pokemon">Lv25</p>
                    </div>
                    <div class="item-progress">
                        <p>Hp</p>
                        <div class="progress">
                            <div class="progress-value progress-value-divers-4"></div>
                        </div>
                    </div>
                    <p class="pv"><?= $ennemy[0]->getHealth() ?>/350</p>
                </div>
            </div>
            <div class="card_pokemon_bottom">
                <div class="item-card-bottom">
                    <div class="name-level">
                        <p class="name-pokemon"><?= $ally[0]->getName() ?></p>
                        <p class="level-pokemon">Lv25</p>
                    </div>
                    <div class="item-progress">
                        <p>Hp</p>
                        <div class="progress">
                            <div class="progress-value progress-value-divers-4"></div>
                        </div>
                    </div>
                    <p class="pv"><?= $ally[0]->getHealth() ?>/350</p>
                </div>
            </div>
        </div>
    </main>
    <!---------------------------------------------------------------Fin contenu------------------------------------------------------------->

    
    
    <!---------------------------------------------------------------Footer------------------------------------------------------------->
    <footer class="content-footer">

    </footer>
    
</body>
</html>
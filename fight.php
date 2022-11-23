
<?php
require_once './classes/Pokemon.php';
require_once './classes/Otherpkm.php';
require_once './function.php';

$pkmPlayer = ['Dracaufeu', 'Tortank', 'Chenipan'];
$pkmComputer = ['Florizarre', 'Métamorphe', 'Pikachu'];


// Ally
$ally = [
    $pkmAlly1 = new Otherpkm("Feu", "Dracaufeu", 100),
    $pkmAlly2 = new Otherpkm("Eau", "Tortank", 100),
    $pkmAlly3 = new Otherpkm("Insecte", "Chenipan", 100)
];

// Ennemy
$ennemy = [
    $pkmEnnemy1 = new Otherpkm("Plante", "Florizarre", 100),
    $pkmEnnemy2 = new Otherpkm("Normal", "Métamorphe", 100),
    $pkmEnnemy3 = new Otherpkm("Electrique", "Pikachu", 100)
];

$allyNb = 0;
$ennemyNb = 2;

// appel de la fonction combat
attack($ally[$allyNb], $ennemy[$ennemyNb]);
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
    <style> .progress-value-ally { width: <?= $ally[$allyNb]->getHealth(); ?>%; } </style>
    <style> .progress-value-ennemy { width: <?= $ennemy[$ennemyNb]->getHealth(); ?>%; } </style>
</head>
<body>
     
    <!---------------------------------------------------------------Contenu principal------------------------------------------------------------->
    <main class="site-content">
        <div class="container-fight">
            <div class="pokemon-bottom pokemon">
                <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/6.png">
            </div>
            <div class="pokemon-top pokemon">
                <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png">
            </div>
            <!-- Info pokémon ennemi -->
            <div class="card_pokemon_top">
                <div class="item-card-top">
                    <div class="name-level">
                        <p class="name-pokemon"><?= $ennemy[$ennemyNb]->getName();?></p>
                        <p class="level-pokemon">Lv25</p>
                    </div>
                    <div class="item-progress">
                        <p>Hp</p>
                        <div class="progress">
                            <div class="progress-value progress-value-ennemy"></div>
                        </div>
                    </div>
                    <p class="pv"><?= $ennemy[$ennemyNb]->getHealth();?>/100</p>
                </div>
            </div>
            <!-- Info pokémon allié -->
            <div class="card_pokemon_bottom">
                <div class="item-card-bottom">
                    <div class="name-level">
                        <p class="name-pokemon"><?= $ally[$allyNb]->getName();?></p>
                        <p class="level-pokemon">Lv25</p>
                    </div>
                    <div class="item-progress">
                        <p>Hp</p>
                        <div class="progress">
                            <div class="progress-value progress-value-ally"></div>
                        </div>
                    </div>
                    <p class="pv"><?= $ally[$allyNb]->getHealth();?>/100</p>
                </div>
            </div>
            <!-- Message du combat -->
            <div class="message-action-pokemon">
                <div class="message">
                    <p><?= $ally[$allyNb]->getHealth() ? $ally[$allyNb]->getName() . ' à vaincu le pokémon adverse !' : $ennemy[$ennemyNb]->getName() . ' à vaincu le pokémon adverse !';?></p>
                </div>
            </div>
        </div>
        <div class="container-console">
            <!-- Pokémon restant dans l'équipe -->
            <div class="pokemon-leftover">
                <p class="title-pokemon-leftover">Pokemon restant</p>
                <div class="container-pokebaall">
                    <div class="pokeball_1 item-pokeball">
                        <img src="./assets/img/pokeball.png">
                        <p class="name-pokemon-leftover"><?= $ally[1]->getName();?></p>
                    </div>
                    <div class="pokeball_2 item-pokeball">
                        <img src="./assets/img/pokeball.png" class="pokeball_2">
                        <p class="name-pokemon-leftover"><?= $ally[2]->getName();?></p>
                    </div>
                </div>
            </div>
            <div class="container-button-attack">
                <div class="button-attack">
                    <img src="./assets/img/attack.png">
                </div>

                <div class="button-super-attack">
                    <img src="./assets/img/explosion.png">
                </div>
            </div>
        </div>
        <div class="leave-btn">
            <button>Abandonner</button>
        </div>
    </main>
    <div class="overlay-leave">
        <h2>Voulez-vous abondonner</h2>
        <div class="container-button">
            <div class="continu-btn">
                <button>Non</button>
            </div>
            <a href="./index.php" class="btn-yes"><button>Oui</button></a>
        </div>
    </div>
    <!---------------------------------------------------------------Fin contenu------------------------------------------------------------->

    
    
    <!---------------------------------------------------------------Footer------------------------------------------------------------->
    <footer class="content-footer">

    </footer>
    
</body>
</html>
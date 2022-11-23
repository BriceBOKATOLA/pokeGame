<?php  require_once './function.php'  ?>
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
    <main class="site-content-choose">
        <!-------------------------- selection  --------------------->
        <form action="./controllers/choose_pokemon-controller.php" method="GET">
        <div class="container-ball">
            <div class="ball">
                <button class="ball-button"><img class="ball-size" src="./assets/img/ball.png" alt="first-pokemon"></button>
                <button class="ball-button"><img class="ball-size" src="./assets/img/ball.png" alt="first-pokemon"></button>
                <button class="ball-button"><img class="ball-size" src="./assets/img/ball.png" alt="first-pokemon"></button>
            </div>
            </div class="pokemon-type">
                <div class="box-type">
                </div>
            </div>
            <div class="dir">
                <div class="select-pokemon-fire">
                    <div class="type">
                        <button class="type-button"> <img class="logo-type" src="./assets/img/palnte.png"></button>
                        <button class="type-button"> <img class="logo-type" src="./assets/img/uk4r1zots2871.png"></button>
                        <button class="type-button"> <img class="logo-type" src="./assets/img/feu.png"></button>
                    </div>
                    <div class="fire-pokemon">
                    <select name="pkm1">
                        <option value="">Sélectionne ton premier Pokemon</option>
                        <option value="Métamorphe">Métamorphe</option>
                        <option value="Dracaufeu">Dracaufeu</option>
                        <option value="Tortank">Tortank</option>
                        <option value="Florizarre">Florizarre</option>
                        <option value="Pikachu">Pikachu</option>
                        <option value="Chenipan">Chenipan</option>
                    </select>
                        <p>Dracaufeu  <img src="./assets/img/6.png"></p>
                        <p>Simiabrase <img src="./assets/img/392.png"></p>
                        <p>Brazégalie <img src="./assets/img/257.png"></p>
                    </div>
                </div>
                <div class="select-pokemon-water">
                    <div class="type">
                        <button class="type-button"> <img class="logo-type" src="./assets/img/palnte.png"></button>
                        <button class="type-button"> <img class="logo-type" src="./assets/img/uk4r1zots2871.png"></button>
                        <button class="type-button"> <img class="logo-type" src="./assets/img/feu.png"></button>
                    </div>
                    <div class="water-pokemon">
                    <select name="pkm2">
                        <option value="">Sélectionne ton deuxième Pokemon</option>
                        <option value="Métamorphe">Métamorphe</option>
                        <option value="Dracaufeu">Dracaufeu</option>
                        <option value="Tortank">Tortank</option>
                        <option value="Florizarre">Florizarre</option>
                        <option value="Pikachu">Pikachu</option>
                        <option value="Chenipan">Chenipan</option>
                    </select>
                        <p>Tortank  <img src="<?= get_pokemon_image('Tortank', 'front_image') ?>"></p>
                        <p>Pingoléon <img src="./assets/img/395.png"></p>
                        <p>Amphinobie <img src="./assets/img/658.png"></p>
                    </div>
                </div>
                <div class="select-pokemon-plant">
                    <div class="type">
                        <button class="type-button"> <img class="logo-type" src="./assets/img/palnte.png"></button>
                        <button class="type-button"> <img class="logo-type" src="./assets/img/uk4r1zots2871.png"></button>
                        <button class="type-button"> <img class="logo-type" src="./assets/img/feu.png"></button>
                    </div>
                    <div class="plant-pokemon">
                    <select name="pkm3">
                        <option value="">Sélectionne ton troisième Pokemon</option>
                        <option value="Métamorphe">Métamorphe</option>
                        <option value="Dracaufeu">Dracaufeu</option>
                        <option value="Tortank">Tortank</option>
                        <option value="Florizarre">Florizarre</option>
                        <option value="Pikachu">Pikachu</option>
                        <option value="Chenipan">Chenipan</option>
                    </select>
                        <p>Florizarre  <img src="./assets/img/3.png"></p>
                        <p>Jungko <img src="./assets/img/254.png"></p>
                        <p>Torterra <img src="./assets/img/389.png"></p>
                    </div>
                </div>
            </div>
            <div class="container-trainer">
                <figure class="img-trainer">
                    <img src="./assets/img/dresseur.png">
                </figure>
            <div class="choise-trainer">
                <div class="container-message">
                    <p>C'est l'heure de composer votre équipe !!</p>
                </div>
                <button type="submit" class="btn-trainer-name">Suivant</button>
            </div>
        </form>

        </div>
    </main>
    <!---------------------------------------------------------------Fin contenu------------------------------------------------------------->
    <!-- pokemon  -->
    <!--   <div class="container dotted p-4 mt-4">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center mt-3">Pokemon</h2>
        <div id="pokeTable" class="row mt-3 p-3">

        </div>
    </div>

-->


</body>

</html>
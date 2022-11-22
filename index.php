<?php
// <!-- test  -->

// $pokemon = '150';

// $api = curl_init("https://pokeapi.co/api/v2/pokemon/$pokemon");
// curl_setopt($api, CURLOPT_RETURNTRANSFER, true);
// $reponse = curl_exec($api);
// curl_close($api);
// $json = json_decode($reponse);

// echo'<h1>Pokemon</h1>';

// foreach($json->abilities as $k => $v){
//     echo $v->ability->name.'<br>';
// }
// echo '<h2>image</h2>';
// // dans les deux faces 

// // devant 
// echo'<img src="'.$json->sprites->back_default.'"width="200">';
// // derriere 
// echo'<img src="'.$json->sprites->front_default.'"width="200">';
// // <!-- recuperé tout le tableau  -->
// $base = "https://pokeapi.co/api/v2/pokemon/";
// $id = 1;
// $data = file_get_contents($base,$id.'/');
// $pokemon = json_decode($data);
// var_dump($pokemon);

// Recuperation des elements de l'api 

// <!-- recuperé tout le tableau  -->
// $base = "https://pokeapi.co/api/v2/pokemon/";
// echo '<h1>PoKemon</h1>';
// for ($id = 1; $id <= 10 ; $id++) { 
//     $data = file_get_contents($base.$id.'/');
//     $pokemon = json_decode($data);
//     echo $pokemon->name."<br>";
//     // types 
//     echo $pokemon->types[0]->type->name."<br>";
// // recuperation de l'image
//     echo'<img src="'.$pokemon->sprites->front_default.'"width="200">';
// }

// var_dump($pokemon);

?>
<!-- fin du test  -->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
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
        <!---------------------------------------------------------------Header------------------------------------------------------------->
        <header class="content-header">
            <img class="logo-pokemon" src="./img/logo_pokemon.png">
        </header>
        <!---------------------------------------------------------------Fin header------------------------------------------------------------->
        <div class="container-trainer">
            <div class="choise-trainer">
                <div class="container-message">
                    <p>Veuillez me renseigner le nom de votre drésseur !!</p>
                </div>
                <form action="" method="POST" class="form-name-trainer">
                    <label for="name">Nom du dresseur :</label>
                    <input type="text" for="name" placeholder="Nom du dresseur">
                </form>
                <a href="./fight.php"><button class="btn-trainer-name">Suivant</button></a>
            </div>
            <figure class="img-trainer">
                <img src="./assets/img/dresseur.png">
            </figure>

        </div>
    </main>
    <!---------------------------------------------------------------Fin contenu------------------------------------------------------------->

    
    
    <!---------------------------------------------------------------Footer------------------------------------------------------------->
    <footer class="content-footer">

    </footer>
    
</body>
</html>




























<!-- autre  -->
<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container dotted p-4 mt-4">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center mt-3">Pokemon</h2>
        <div id="pokeTable" class="row mt-3 p-3">

        </div>
    </div>




    <script src="./assets/script.js"></script>
    
</body>
</html> -->
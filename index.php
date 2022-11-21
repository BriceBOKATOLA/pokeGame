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
$base = "https://pokeapi.co/api/v2/pokemon/";
for ($id = 1; $id <= 10 ; $id++) { 
    $data = file_get_contents($base.$id.'/');
    $pokemon = json_decode($data);
    echo $pokemon->name."<br>";
// recuperation de l'image
    echo'<img src="'.$pokemon->sprites->front_default.'"width="200">';
}

var_dump($pokemon);

?>
<!-- fin du test  -->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
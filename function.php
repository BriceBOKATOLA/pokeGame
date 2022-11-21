<?php 
$base = "https://pokeapi.co/api/v2/pokemon" ;
$id = 1;
$data = file_get_contents($base.$id.'/');
$pokemon = json_decode($data);
var_dump($pokemon);
// echo $pokemon->name."<br>";

?>
<pre>
<?php
// Mon commentaire super top sur une ligne !
echo 'Hello world !!!';

/**
 * Mon commentaire sur plusieurs
 * lignes
 */

echo "Mon premier site internet";

$nom = "Bond";
$prenom = "James";

echo "<h1>Salut à toi $nom $prenom</h1>";

$nombre = 22;
$decimal = 989887.936768;

var_dump($nom, $nombre, $decimal);

// Création d'un tableau
$equipe = ["Donald", "Sparrow", "Bob"];

$equipe[] = "Robert";

print_r($equipe);

echo "Joueur 1 : $equipe[0]";

$joueur1 = [
  "nom" => "Kenobi",
  "prenom" => "Ben",
  "score" => 378
];

$joueur2 = [
  "nom" => "Bobby",
  "prenom" => "Robert",
  "score" => 23
];

$joueur3 = [
  "nom" => "Sparrow",
  "prenom" => "Jack",
  "score" => 22
];

$bleu = [$joueur1, $joueur2, $joueur3];
echo "<h2> Equipe bleue : </h2>";

foreach ($bleu as $joueur) {
  echo "Nom : " . $joueur['nom'] . " Prenom : " . $joueur['prenom'] .
    " score : " . $joueur['score'] . ".<br>";
}

function helloPlayer(array $player)
{
  return "Salut à toi " . $player["nom"] . " " . $player['prenom'];
}


function helloTeam(array $team)
{
  foreach ($team as $joueur) {
    echo helloPlayer($joueur);
    echo "<br>";
  }
}

helloTeam($bleu);
$ed = ["nom"=>"Ed", "prenom"=>"Douard"];
echo helloPlayer($ed);


function listHTML(string $name, array $elements){
  if (is_null($name) || empty($elements))
      return null;
  
  echo "<h3>$name</h3>";
  echo "<ul>";
  foreach($elements as $liste){
      echo "<li>$liste</li>";
  }    
  echo "</ul>";
}

listHTML("Capitales",['Paris', 'Rome','Madrid']);

function remplacerLesLettres(string $sentence){
  $sentence = str_replace(["e","E", "i","I","o","O"], ["3","3","1","1","0","0"],$sentence);

  return $sentence;
}
echo remplacerLesLettres("Les cours de programmation Web sont trops cools");

var_dump(date('d/m/Y')) ;
?>

</pre>
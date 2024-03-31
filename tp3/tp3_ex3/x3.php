<?php
 
$N = rand(100, 999);

echo "Le nombre de trois chiffres généré aléatoirement est : $N<br>";

 
$essais = 0;

 
for ($tirage = null; $tirage !== $N; $essais++) {
    $tirage = rand(100, 999); 
}

echo "Le nombre $N a été réobtenu après $essais essais.";
?>

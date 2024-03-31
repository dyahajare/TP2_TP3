<!DOCTYPE html>
<html  >
<head>
 
<title>Nombres d'Armstrong</title>
</head>
<body>

<h1>Nombres d'Armstrong inférieurs à 1000 :</h1>

<ul>
<?php
 
function sommePuissances($nombre) {
    if ($nombre == 0) {
        return 0;
    } else {
        return pow(($nombre % 10), 3) + sommePuissances((int)($nombre / 10), 3);
    }
}

 
function estNombreArmstrong($nombre) {
    $nombre_chiffres = strlen((string)$nombre);
    $somme = sommePuissances($nombre);
    return $somme == $nombre;
}

 
for ($i = 1; $i < 1000; $i++) {
    if (estNombreArmstrong($i)) {
        echo "<li>$i</li>";
    }
}
?>
</ul>

</body>
</html>

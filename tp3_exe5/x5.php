<!DOCTYPE html>
<html  >
<head>
    
    <title>Résolution d'équations du deuxième degré</title>
</head>
<body>
    <h2>Résolution d'équations du deuxième degré</h2>
    <form method="post">
        <label for="a">Coefficient a :</label>
        <input type="number" id="a" name="a" required><br><br>
        
        <label for="b">Coefficient b :</label>
        <input type="number" id="b" name="b" required><br><br>
        
        <label for="c">Coefficient c :</label>
        <input type="number" id="c" name="c" required><br><br>
        
        <button type="submit">Calculer</button>
    </form>

    <?php
   
    function calculerDiscriminant($a, $b, $c) {
        return $b * $b - 4 * $a * $c;
    }

    
    function calculerSolutions($a, $b, $c) {
        $delta = calculerDiscriminant($a, $b, $c);
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return array($x1, $x2);
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            return array($x);
        } else {
            return array();
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        
        $solutions = calculerSolutions($a, $b, $c);
 
        if (empty($solutions)) {
            echo "<p>L'équation n'a pas de solution réelle.</p>";
        } else {
            echo "<p>Les solutions de l'équation sont : ";
            foreach ($solutions as $solution) {
                echo "x = $solution, ";
            }
            echo 
        }}
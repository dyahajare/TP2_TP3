<?php
 
function nombreAleatoire() {
    return rand(1, 100); 
}

 
$suite = [];

 
while (true) {
 
    $nouveauNombre = nombreAleatoire();
    
   
    $suite[] = $nouveauNombre;
    
 
    if (count($suite) >= 3) {
       
        $dernierNombre = end($suite);
        $avantDernierNombre = prev($suite);
        $troisiemeDernierNombre = prev($suite);
        
         
        if ($dernierNombre % 2 == 0 && $avantDernierNombre % 2 == 0 && $troisiemeDernierNombre % 2 != 0) {
            echo "Suite obtenue : ";
            echo implode(", ", $suite);  
            break;  
        }
    }
}
?>

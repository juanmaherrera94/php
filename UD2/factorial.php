<?php
function obtenerfactorial($numero){ 
	if($numero<0){
		return "El numero no puede ser negativo";
	}
    $facto = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $facto = $facto * $i; 
	} 
    return $facto; 
} 
$numero = -5; 
$resultado = obtenerfactorial($numero); 
echo "El factorial del numero = $numero es = $resultado"; 
?>
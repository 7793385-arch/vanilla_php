<?php
 $linea = fgets(STDIN);
 $datos = explode(" ", trim($linea));

 $operacion = $datos[0];
 $num1 = $datos[1];
 $num2 = $datos[2];

  if (count($datos) < 2) {
    echo "(Error) No dispongo de suficientes argumentos.";
} 

function suma(int $num1, int $num2): int
  {
      return $num1 + $num2;
  }

  function media(int $num1, int $num2): int
  {
      return suma($num1, $num2)/2;
  }

  if($operacion = 'suma'){
    $resultado = suma($num1, $num2); 
    echo "La suma de los números es: $resultado";
  }elseif ($operacion = 'media') {
    $resultado2 = media($num1, $num2); 
    echo "La media de los números es: $resultado2";
}else{
    echo "(Error) Operación no permitida";
}






 
 
 



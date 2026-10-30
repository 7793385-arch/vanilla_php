<?php

//Ejercicio 1
  function mostrarCiclo() {
    $nombreCiclo = "Desarrollo de Aplicaciones Web";
    echo '<p>', $nombreCiclo, '</p>';
  }

  mostrarCiclo();

  //echo $nombreCiclo;   // Warning: Undefined variable $nombreCiclo
  // Una variable creada dentro de una función es local a esa función: solo existe mientras la función se está ejecutando, y nada de fuera puede verla.
  //Por eso al hacer 'echo $nombreCiclo;' nos indica en el warning que la variable no está definida, porque el echo está fuera de la función.

  //Ejercicio 2
  $totalCiclosMostrados = 0;

  function registrarVisita() {
    global $totalCiclosMostrados;
    $totalCiclosMostrados++;
  }

  registrarVisita();
  registrarVisita();
  registrarVisita();

  echo '<p>Ciclos mostrados: ', $totalCiclosMostrados, '</p>';   // 3

  //Ejercicio 3
  define('NOMBRE_CENTRO', 'CIFP Carlos III');

  function pie() {
    // Sin "global": las constantes son accesibles en cualquier ámbito
    echo '<footer>', NOMBRE_CENTRO, '</footer>';
  }

  pie();

  //Ejercicio 4
  function contadorVisitas() {
    static $visitas = 0;
    $visitas++;
    echo '<p>Visita número ', $visitas, '</p>';
  }

  contadorVisitas();   // Visita número 1
  contadorVisitas();   // Visita número 2
  contadorVisitas();   // Visita número 3
  // Por cada petición de script php se inicia de nuevo, al terminar de generar la respuesta no queda memoria de nada de lo ocurrido, por eso al recargar la página vuelve a empezar por 1.

  //Ejercicio 5
  //Las variables superglobales son variables internas siempre disponibles, independientemente del contexto. Se utilizan en formularios y sesiones. Tienen en común con las constantes que ambas están disponibles en cualquier ámbito sin global. 
  //Ejemplos: $_GET, $_POST.

?>
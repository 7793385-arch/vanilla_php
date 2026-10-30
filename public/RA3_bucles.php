
<?php
//EJERCICIO 1
  echo '<select name="promocion">';
  for ($anio = 2020; $anio <= 2025; $anio++) {
    echo '<option value="', $anio, '">', $anio, '</option>';
  }
  echo '</select>';
?>
<?php
//EJERCICIO 2
  $horasCiclo    = 2000;
  $horasPorAnio  = 700;
  $horasCursadas = 0;
  $anios         = 0;

  while ($horasCursadas < $horasCiclo) {
    $horasCursadas += $horasPorAnio;
    $anios++;
  }

  echo '<p>Años necesarios: ', $anios, '</p>';   // 3 iteraciones
?>
<?php
//EJERCICIO 3   
  $curriculos = [
    ['alumno' => 'Ana López', 'ciclo' => 'DAW', 'video' => '…'],
    ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM', 'video' => '…'],
    ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => '…'],
  ];
 
  echo '<ul>';
  foreach ($curriculos as $curriculo) {
    echo '<li class="curriculo">', $curriculo['alumno'], ' — ', $curriculo['ciclo'], '</li>';
  }
  echo '</ul>';
?>
<?php
//EJERCICIO 4
  $curriculo = ['alumno' => 'Ana López', 'ciclo' => 'DAW', 'video' => '…'];
 
  echo '<dl>';
  foreach ($curriculo as $campo => $valor) {
    echo '<dt>', $campo, '</dt><dd>', $valor, '</dd>';
  }
  echo '</dl>';
?>
<?php
//EJERCICIO 5
//En el código fuente, el servidor ha generado 3 filas. No aparece Pablo Ruiz, ya que como podemos observar en el array, no tiene video, 
// y como indica el condicional, hay que saltarse las iteraciones (continue) de dichos componentes del array que no tengan video.
   $curriculosPublicados = [
     ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
     ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
     ['alumno' => 'Pablo Ruiz',   'ciclo' => 'DAW',  'video' => ''],
     ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
   ];
 ?>
 <table>
   <tr><th>Alumno</th><th>Vídeo</th></tr>
   <?php foreach ($curriculosPublicados as $curriculo): ?>
     <?php if ($curriculo['video'] === '') { continue; } ?>
     <tr class="con-video">
       <td><?= $curriculo['alumno'] ?></td>
       <td><a href="<?= $curriculo['video'] ?>">vídeo</a></td>
     </tr>
   <?php endforeach; ?>
 </table>

 
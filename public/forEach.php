<?php
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
  $curriculo = ['alumno' => 'Ana López', 'ciclo' => 'DAW', 'video' => '…'];
 
  echo '<dl>';
  foreach ($curriculo as $campo => $valor) {
    echo '<dt>', $campo, '</dt><dd>', $valor, '</dd>';
  }
  echo '</dl>';
?>
<?php
$estudiantes = ["Hernández", "García", "Martínez"];
$buscado = "García";
$arr_length = count($estudiantes);
$encontrado = false;

for ($i = 0; $i < $arr_length; $i++) {
    if ($estudiantes[$i] === $buscado) {
        $encontrado = true;
        break;
    }
}

if ($encontrado) {
    echo "<p>Apellido encontrado</p>";
} else {
    echo "<p>Apellido no encontrado</p>";
}
?>

  
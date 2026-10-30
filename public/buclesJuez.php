<?php

$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));

$i = 0;
$suma = 0;

while ($i < count($datos) && $datos[$i] =! 0) {
    
    $suma += $datos[$i];
    $i++;

  }

echo "<p>Se han sumado $i números, dando como resultado un total de $suma</p>"

?>  

<?php
$linea = fgets(STDIN);
$datos = explode(" ", trim($linea));
$arg1 = $datos[0];
$arg2 = $datos[1];
?>
<table border="solid 1px">
<?php
for($i = 0; $i<=$arg1; $i++){
?>   
    <tr>
    <?php
    for($i = 0; $i<=$arg2; $i++){
    ?>    
        <td></td>
    <?php
    }
    ?>
    </tr>
<?php    
}
?>
</table>

<?php
class Ciclo
{
    public const GRADO_MEDIO    = 'Medio';
    public const GRADO_SUPERIOR = 'Superior';
 
    public function titulacion(): string
    {
        return $this->grado === self::GRADO_SUPERIOR ? 'Técnico Superior' : 'Técnico';
    }
}
?>
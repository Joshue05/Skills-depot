
<?php
abstract class ClaseAbstracta
{
    // El método abstracto sólo necesita definir los argumentos requeridos
    abstract protected function nombrePrefijo($nombre);
}

class ClaseConcreta extends ClaseAbstracta
{
    // La clase derivada puede definir parámetros opcionales que no estén en la estructura del prototipo
    public function nombrePrefijo($nombre, $separador = ".") {
        if ($nombre == "Josue") {
            $prefijo = "Mr";
        } elseif ($nombre == "Juana") {
            $prefijo = "Mrs";
        } else {
            $prefijo = "";
        }
        return "{$prefijo}{$separador} {$nombre}";
    }
}

$clase = new ClaseConcreta;
echo $clase->nombrePrefijo("Josue"), "\n";
echo $clase->nombrePrefijo("Juana"), "\n";
?>

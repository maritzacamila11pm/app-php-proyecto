<?php
class Condicionales{
    public function Condicionales(){
        echo <<<'EOT'
        -- CONCIDICIONALES --
        <pre>
        if: Ejecuta un bloque de código si una condición es verdadera
        else: Ejecuta un bloque de código si la condición en el if es falsa.
        elseif: Permite agregar múltiples condiciones. Si la condición del if es falsa, se verifica la condición del elseif.
        switch: Permite comprobar una variable contra múltiples posibles valores (casos). Si un caso coincide con el valor, se ejecuta el código correspondiente.
        ? : (Operador Ternario): Es una forma corta de escribir un if-else. Evaluación de una condición en una sola línea. Si la condición es verdadera, ejecuta una acción, si es falsa, ejecuta otra.
        isst(): Verifica si una variable está definida y no es null.
        empty(): Comprueba si una variable está vacía (es decir, no está definida, tiene valor null, 0, cadena vacía, false, etc.).
        switch con break: Dentro de un switch, cada case debe ser seguido por un break para evitar que el código continúe ejecutándose en los siguientes case. Si no hay break, se ejecutarán todos los bloques de código subsecuentes.
        default en switch: Especifica el bloque de código que se ejecutará si ningún case coincide con el valor. Es similar al else en una estructura if.

        </pre>

        EOT;
    }
}
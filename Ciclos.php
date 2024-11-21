<?php
class Ciclos{
    public function ciclos(){
        echo <<<'EOT'
        -- CICLOS --
        <pre>
        foreach: Se utiliza para recorrer los elementos de un array o un objeto. Itera sobre cada elemento y permite realizar acciones sobre sus claves y valores.
        while: Ejecuta un bloque de código mientras una condición sea verdadera. La condición se evalúa antes de cada iteración.
        do-while: Ejecuta un bloque de código al menos una vez, y luego continúa ejecutándolo mientras una condición sea verdadera. La condición se evalúa después de cada iteración.
        for:Ejecuta un bloque de código un número determinado de veces. Es útil cuando sabes cuántas veces necesitas repetir un bloque de código.
        continue: Hace que el ciclo pase inmediatamente a la siguiente iteración, omitiendo el código que sigue en esa iteración.
        break: Se usa dentro de un ciclo para terminar la ejecución del ciclo de manera anticipada, es decir, salir del ciclo.
        </pre>

        EOT;
    }
}
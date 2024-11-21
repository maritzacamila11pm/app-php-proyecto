<?php
class Operacion_Aritmetica {
    public function FuncionesAritmeticas(){
        echo <<<'EOT'
        <pre>
        -- OPERACIONES ARITMETICAS --
        Suma (+): Agregar dos o más números .  
        Ejemplo : a=1 + b=3 = 4
        Resta (-): Quitar un número de otro.
        Ejemplo : a=5 + b=10 = 11  
        Multiplicación (*): Repetir un número por otro.
        Ejemplo : a=3 * b=7 = 21  
        División (/): Dividir un número en partes iguales.
        Ejemplo : a=10 / b=2 = 5
        Exponente (**): Potencia de un número. 
        Ejemplo : a=2 ** b=4 = 16 
        Incremento (++): Aumentar un número en 1. 
        a++ 
        Decremento (--): Disminuir un número en 1.
        b--  
        Módulo (%): El sobrante de una división.  
        Ejemplo : a=10 % b=2 = 0
        Raíz cuadrada (sqrt()): Obtener el número que, elevado al cuadrado, da el valor original.  
        </pre>

        EOT;
    }
}
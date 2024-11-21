<?php
class Tipos_Datos{
    public function Tiposdedato(){
        echo <<<'EOT'
        -- TIPOS DE DATOS -- 
        <pre>
        Entero (int): Representa un número entero, positivo o negativo, sin decimales.  
        Objeto (object): Representa una instancia de una clase, que puede tener propiedades y métodos.    
        Cadena de texto (string): Representa una secuencia de caracteres, como palabras o frases.  
        Booleano (bool): Representa un valor de verdadero o falso. 
        Punto flotante (float o double): Representa un número con decimales o en notación científica. 
        Arreglo (array): Una colección de elementos, que puede contener valores de diferentes tipos de datos.  
        </pre>

        EOT;
    }
}
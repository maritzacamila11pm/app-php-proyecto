<?php
include "./padre.php";
class Operaciones_String extends Padre{
    public function llamarPadre(){
        parent::Saludo();
        $this ->Saludo();
    }

    //METODO 2
    public function funcionesString(){
        echo <<<'EOT'
        ---   METODOS DE STRING EN PHP ---
        <pre>
        explode(): Divide una cadena en un array utilizando un delimitador.
        implode(): Convierte un array en una cadena, utilizando un delimitador.
        strlen(): Devuelve la longitud de una cadena.
        strtolower(): Convierte una cadena a minúsculas.
        strtoupper(): Convierte una cadena a mayúsculas.
        substr(): Devuelve una parte de una cadena.
        str_replace(): Reemplaza todas las ocurrencias de una subcadena por otra.
        trim(): Elimina los espacios en blanco al inicio y al final de una cadena.
        strpos(): Encuentra la posición de la primera ocurrencia de una subcadena en una cadena.
        rtrim(): Elimina los espacios en blanco al final de una cadena.
        ltrim(): Elimina los espacios en blanco al principio de una cadena.
        ucfirst(): Convierte el primer carácter de una cadena a mayúsculas.
        ucwords(): Convierte el primer carácter de cada palabra en una cadena a mayúsculas.
        str_split(): Divide una cadena en un array de caracteres.
        </pre>

        EOT;
    }
}
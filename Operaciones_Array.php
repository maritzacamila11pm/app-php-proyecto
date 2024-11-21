<?php
class operacionesArray{
    public function array_operaciones(){
        echo <<<'EOT'
        ------------------------------------  ARRAY -----------------------------------------------------------------------------
        <pre>
        array_push(): Agrega uno o más elementos al final de un array.
        array_pop(): Elimina el último elemento de un array y lo retorna.
        array_shift(): Elimina el primer elemento de un array y lo retorna.
        array_unshift(): Agrega uno o más elementos al inicio de un array.
        array_merge(): Fusiona dos o más arrays en uno solo.
        array_slice(): Devuelve una porción de un array, especificando el índice de inicio y la longitud.
        array_splice(): Elimina elementos de un array y opcionalmente los reemplaza por otros.
        in_array(): Verifica si un valor dado existe dentro de un array, retornando true si está presente, de lo contrario false.
        array_search(): Busca un valor dentro de un array y devuelve la clave (índice) donde se encuentra.
        array_keys(): Devuelve todas las claves (índices) de un array.
        array_values(): Devuelve todos los valores de un array sin las claves (índices).
        array_reverse(): Devuelve un array con los elementos en orden invertido.
        array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
        array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.

        </pre>

        EOT;
    }
}
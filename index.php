<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLASE 2</title>
</head>
<body>
    <p>MARITZA CAMILA PONGO MAMANI</p>
    <!-- ETIQUETAS PHP-->
    <?php
      echo "HOLA MUNDO  <br> ";
      
      $dato_1 = 6 ;
      $dato_2 = 100;
     // $dato1 ++;

      echo "El resultado es: ". $dato_1 + $dato_2 ."<br>";
      echo "Incremento ".$dato_1 + 1 ."<br/>";

      if ($dato_1 ==2){
        echo "El dato 1 : No es igual";
      }else if ($dato_2 == 100){
        echo "El dato dos : Si es igual <BR/>";
      }
    //declarar 7 tipos de datos 
    //MARITZA CAMILA PONGO MAMANI
     $entero = 42; 
     $String = "MARITZA CAMILA ";
     $flotante = 8.10;
     $booleano = FALSE;
     $segundobooleano= TRUE;
     $nulo = null;
     $arreglo = array("rojo", "verde", "azul");
     $arreglo2 = array("manzana ","fresa","uva");

     $emojis = ["😊","😃","😂","😎"];
     foreach($emojis as $item ){
        echo $item . "<br>";
     }
     //ITINERAR 
     //MARITZA CAMILA PONGO MAMANI

     $array = [1, 2, 3, 4, 5];  
     foreach ($array as $valor) {
         echo $valor . "<br>";  
     }

  //maritza camila 
     //tabla de multiplicar hasta 12 
     $array = [1,2, 3,4,5,6,7,8,9,10,11,12];
     foreach ($array as $numeros) {
        echo "<strong>Tabla del " . $numeros. ":</strong><br>";
    
        foreach ($array as $multiplicar) {
            $resultado = $numeros * $multiplicar;
            echo $numeros . " x " . $multiplicar . " =  " . $resultado .  "<br>";
        }
    
        echo "<br>";  
    }
     //tabla de multiplicar de 2 hasta 12 
     $multiplicar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11,12];
     $tabla2 = 2;
     echo "TABLA DEL DOS" . "<br>";
     
     foreach ($multiplicar as $pm) {
        $resultado = $tabla2 * $pm;
        echo $tabla2 . " x " . $pm . " = " . $resultado . "<br>";
}
?>

   
    ?>

</body>
</html>
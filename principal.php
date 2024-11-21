<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-- PRINCIPAL --</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body >
    <!-- ESTILOS -->
    <style>
        body {
            background-color: black;
            font-family: inherit;
        }
        .container{
            background-color: #F8B7D4;
            border-radius: 3%;
        }
        h1 {
            font-family: inherit;
            padding-block-start: 2%;
             color: crimson;
             font-size: xx-large;
            }
        h6 {
             font-family: inherit;
             font-size: xx-large;
             color: rgb(8, 8, 8);
            }
        .operaciones{
            font-family: inherit;
        }
        .btn{  
             background-color: black; /* Fondo negro */
             color: white; /* Texto blanco */
             padding: 10px 20px; /* Espaciado interno */
             border: none; /* Sin borde */
             border-radius: 5px; /* Bordes redondeados */
             font-size: 16px; /* Tamaño de la fuente */
             cursor: pointer; /* Cambiar el cursor al pasar sobre el botón */
             transition: background-color 0.3s ease; /* Efecto al pasar el mouse */
            }
       
    </style>
    
    <!-- CODIGO  -->

    <div class="container" style= "margin-top: 1%;">
        <h1>MARITZA CAMILA PONGO </h1>
        <h6>PHP BASICO </h6>
        <ul class="operaciones">
            <ol>1. Operaciones con String</ol>
            <ol>2. Operadores Aritmeticos </ol>
            <ol>3. Tipos de datos</ol>
            <ol>4. Operaciones con array</ol>
            <ol>5. Condicionales</ol>
            <ol>6. Ciclos </ol>
            <ol>7. Salir </ol>
        </ul>
        <h6>FORMULARIO</h6>
        <hr>

        <form method="POST" action="">
            <label for="numero" class="form-label" >Ingresar numero </label>
            <input type="number" class="form-control" id="precio" name="numero" required>
            <br>
            <button id="btn" type="submit" class="btn btn-info">ENVIAR</button>
        </form>
        <hr>

        <?php 
        
        include "./Operadores_Logicos.php";
        include "./Operaciones_String.php";
        include "./Operacion_Aritmetica.php";
        include "./Tipos_Datos.php";
        include "./Operaciones_Array.php";
        include "./Condicionales.php";
        include "./Ciclos.php";



        //CODIGO PHP
        //echo $_GET["precio"]."<br>";
        //echo $_GET["fruta"]."<br>";

        if (isset($_GET["precio"])) {
            echo $_GET["precio"] . "<br>";
        }

        if (isset($_GET["fruta"])) {
            echo $_GET["fruta"] . "<br>";
        }

        //VALIDAR 
        if (isset($_POST["numero"])) {
            $opcion = $_POST["numero"];
            //SWITCH
            switch ($opcion) {
                case 1:
                    echo "</br>";
                    echo "Ingreso al caso numero 1";
                    echo "</br>";
                    $a = new Operaciones_String();
                    $a->funcionesString();
                    break;
                case 2:
                     echo "</br>";
                     echo "Ingreso al caso numero 2 - Operaciones Aritméticas";
                     echo "</br>";
                    $b = new Operacion_Aritmetica();
                    $b->FuncionesAritmeticas();
                    //para default es : no ; 
                    break;
                case 3:
                    echo "</br>";
                    echo "Ingreso al caso numero 3 - Operaciones Aritméticas";
                    echo "</br>";
                   $b = new Tipos_Datos();
                   $b->Tiposdedato();
                   break;
                case 4:
                    echo "</br>";
                    echo "Ingreso al caso numero 4 - Operaciones Aritméticas";
                    echo "</br>";
                   $b = new operacionesArray();
                   $b->array_operaciones();
                   break;
                case 5:
                    echo "</br>";
                    echo "Ingreso al caso numero 5 - Condicionales";
                    echo "</br>";
                   $b = new Condicionales();
                   $b->Condicionales();
                   break;
                case 6:
                    echo "</br>";
                    echo "Ingreso al caso numero 6 - Ciclos";
                    echo "</br>";
                   $b = new Ciclos();
                   $b->ciclos();
                   break;
                case 7:
                    echo "</br>";
                    echo "Ingreso al caso numero  7 - Salir";
                    echo "</br>";
                    echo "</br>";
                    echo "Saliendo... Gracias por usar el sistema.";
                    echo "</br>";
                    exit();  // Termina la ejecución del script
                   default:
                    echo "</br>";
                    echo "Ingrese una opcion valida";
                    echo "</br>";
                    break;
            }

            echo $_POST["numero"]."<br>";
        }

        //INSTANCIAR 
        $ol = new Operadores_Logicos();
        $ol->Operadores();
        $ol->saludar();
        
       
        ?>
    </div>
</body>
</html>

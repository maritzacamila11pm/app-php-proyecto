<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>-- PRINCIPAL --</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="diseño2.css">
</head>
    <body>
   
    <div class = "container">
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
        <input type="number" class="form-control" id="precio" name="numero" required >
        <br>
        <button type="submit" class="btn btn-info">ENVIAR</button>
    </form>
    <hr>
    
    <?php 
    include "./Operadores_Logicos.php";
    //CODIGO PHP
    //echo $_GET["precio"]."<br>";
    //echo $_GET["fruta"]."<br>";
    
    if (isset($_GET["precio"])){
        echo $_GET["precio"] . "<br>";
    }

    if (isset($_GET["fruta"])){
        echo $_GET["fruta"] . "<br>";
    }

     echo $_POST["numero"]. "<br>";

     //INSTANCIAR 
     $ol = new Operadores_Logicos();
     $ol ->Operadores();
     $ol ->saludar();


    ?>
    </div>
</body>
</html>
<?php
  $nombre = $_GET['nombre'];
  $apellido = $_GET['apellido'];
  $fechaNacimiento =  $_GET['fechaNacimiento'];
  $tipoId = $_GET['tipoId'];
  $numId = $_GET['numId'];
  $correoE = $_GET['correoE'];
  $genero = $_GET['genero'];

  if ($genero == 'Masculino') {
    $imagen = '../img/Hombre.jpg';
  } else if($genero == 'Femenino'){
    $imagen = '../img/Mujer.jpeg';
  } else{
    $imagen = '../img/Indefinido.jpg';
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos registrados</title>
    <link type="text/css" rel="stylesheet" href="../css/estilos.css">
</head>
<body>
  <h1>Bienvenid@, <?php echo $nombre . ' ' . $apellido; ?>!</h1>
  <h2>Información ingresada: </h2>
  <p>Fecha de nacimiento: <?php echo $fechaNacimiento; ?></p>
  <p>Tipo de identificación: <?php echo $tipoId; ?>        - Número de identificación: <?php echo $numId; ?></p>
  <p>Correo electrónico: <?php echo $correoE; ?></p>
  <p>Género: <?php echo $genero; ?></p>
  <img src="<?php echo $imagen; ?>" alt="Imagen de <?php echo $genero; ?>"><br>
  <a href="calculadora.php">Calculadora</a>
  
</body>
</html>
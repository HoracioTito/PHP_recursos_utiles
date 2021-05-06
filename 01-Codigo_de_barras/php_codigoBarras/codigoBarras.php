<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ejemplo de creación de código de barras</title>
</head>
<body>

<!--
 Este ejemplo ha sido descargado de Internet, no es de mi creación, unicamente
 lo publico para que este al alcance de toda la comunidad
-->

<form action="" method="post">
    Ingrese el Codigo para crear el código de barras:
    <input name="numero" type="text" />
    <input type="submit" value="Enviar" />
</form>

<?php
if(isset($_POST["numero"]) && is_numeric($_POST["numero"]))
{
    //Mostramos la imagen
    echo "<img src='codigoBarras_img.php?numero=".$_POST["numero"]."'>";
}
?>
</body>
</html>

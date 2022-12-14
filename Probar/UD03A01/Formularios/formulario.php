<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas de formularios</title>
</head>
<body>

    <h1>Pruebas de formularios</h1>

    <form action="procesar.php" method="get">
        <!--<p>Usuario: <input type="text" name="nome"/></p> -->
        <label>Usuario: <input type="text" name="nome"/></label> <!--Con Label, si pinchamos en el nombre, nos mete en el campo de escritura-->
        <br><br>

        <label>Baloncesto<input type="checkbox" name="deporte"  value="balon"></label>
        </br>
        <label>Futboll<input type="checkbox" name="Futboll"  value="Futboll"></label>
        </br>
        <label>Maior <input type="radio" name="idade" value="maior" checked="checked"/></label>
        <label>Menor <input type="radio" name="idade" value="menor"/></label>
        </br>
        <!--<label>Tipo usuario
            <select name="tipoUser">
                <option value="1">Rexistrado</option>
                <option value="2">Editor</option>
                <option value="3">Administrador</option>
            </select>
        </label>-->

        <?php
        include 'datos.php';
        echo "<label>Tipo usuario
                <select name='tipoUser'>";
            foreach($tipos as $fila) {
                echo "<option value='". $fila[0] ."'>". $fila[1] ."</option>";
            }
        echo "</select>
        </label>";
        ?>

        </br>
        <input type="submit" name="ENVIAR" value="enviar"/>
    </form>
    
</body>
</html>
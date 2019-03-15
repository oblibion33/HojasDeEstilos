<?php include('../lib/constantes.php') ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    </head>
    <body>

        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php'); ?></div>
            <div id="contenido">
                <form >
                    <div>
                        <label for="Rut">Rut </label>
                        <input type="text" class="form-control" id="inputRut" placeholder="XXXXXXXX-X">
                    </div>
                    <div>
                        <label for="Nombre">Nombre </label>
                        <input type="text" class="form-control" id="inputNombre" placeholder="José Pérez">
                    </div>  
                </form>
            </div>
        </div>

    </body>
</html>
<!-- 
<form action="../lib/recepcionvacaciones.php" method="get">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <br>Nombre: <input id="nombre" name="nombre" type="text">
                        <br>Cargo: <input id="cargo" name="cargo" type="text">
                        <br>Fecha de inicio:<input id="fechaini" name="fechaini" type="text">
                        <br>Días totales:<input id="diastotales" type="text">
                        <br>Comentario<textarea id="comentario" rows="7" cols=20>   </textarea>
                        <input type="submit" value="Enviar"  >      
</form>
-->
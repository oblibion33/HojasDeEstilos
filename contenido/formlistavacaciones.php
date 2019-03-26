<?php
include '../lib/vacaciones.php';
include '../lib/constantes.php';
if (isset($_SESSION["aVacaciones"])) {
    $arrVacaciones = $_SESSION["aVacaciones"];
} else {
    $arrVacaciones = "";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="../css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="contenedor">
            <div id="titulo"></div>
            <div id="menu"><?php include('../menu.php'); ?></div>
            <div id="contenido">

                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Cargo</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Termino</th>
                            <th>Dias totales</th>
                            <th>Comentario</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (is_array($arrVacaciones)) {
                            foreach ($arrVacaciones as $key => $oVacacion) {
                                ?>
                                <tr>
                                    <td><?= $key + 1; ?></td>
                                    <td><?= $oVacacion->getRut(); ?></td>
                                    <td><?= $oVacacion->getNombre(); ?></td>
                                    <td><?= $oVacacion->getCargo(); ?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><input type="button" id="eliminarVacacion" value="Eliminar" onclick="JavaScript:Feliminar(<?= $oVacacion->getRut(); ?>);" ><input type="button" id="modificarVacacion" value="Editar"></td>
                                </tr>
                            <?php }
                        } ?>
                    </tbody>
                </table>
                <form id="formelimina" action="../lib/eliminarrecepcion.php" method="post">
                    <input type="hidden" value="" name="rut_e" id="rut_e">
                </form>
            </div>

        </div>


    </body>
    <script>
        $("[id*=subvacaciones]").show();
        $("[id*=subvacaciones]").css("display", "block");
        $("#subvacaciones-lista").addClass("active");

        $("#eliminarVacacion").click(function () {
            $.post("../lib/eliminarrecepcion.php", {r: $("#rut_easinc").val()});

        });
        function Feliminar(id) {
            resp = confirm("esta seguro de eliminar");
            if (resp) {
                $("#rut_e").val(id);
                $("#formelimina").submit();
            }

        };
        
    </script>

</html>

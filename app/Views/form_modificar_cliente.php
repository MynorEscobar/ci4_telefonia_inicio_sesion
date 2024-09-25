<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modificar</h1>
    <form action="<?=base_url("modificar_cliente")?>" method="post">
        <label for="txtId">Id</label>
        <input type="text" name="txtId" id="txtId"
        value="<?=$datos['cliente_id']?>"
        >
        <br>
        <label for="txtNombre">Nombre</label>
        <input type="text" name="txtNombre" id="txtNombre"
        value="<?=$datos['nombre']?>"
        >
        <br>
        <label for="txtApellido">Apellido
        <input type="text" name="txtApellido" id="txtApellido"
        value="<?=$datos['apellido']?>"
        >
        <br>
        <label for="txtCorreo">Correo</label>
        <input type="text" name="txtCorreo" id="txtCorreo"
        value="<?=$datos['correo_electronico']?>"
        >
        <br>
        <label for="txtCalleAv">Calle o Avenida</label>
        <input type="text" name="txtCalleAv" id="txtCalleAv"
        value="<?=$datos['calle_avenida']?>">
        <br>
        <label for="txtNoCasa">No. Casa</label>
        <input type="text" name="txtNoCasa" id="txtNoCasa"
        value="<?=$datos['no_casa']?>">
        <br>
        <label for="txtZona">Zona</label>
        <input type="text" name="txtZona" id="txtZona"
        value="<?=$datos['zona']?>">
        <br>
        <input type="submit" value="Guardar Cambios" name="btnGuardar" id="btnGuardar">
    </form>
    <a href="<?=base_url('ver_clientes')?>">Regresar</a>
</body>
</html>
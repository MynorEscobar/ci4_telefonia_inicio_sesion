<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nuevo cliente</h1>
    <form action="<?=base_url("guardar_cliente")?>" method="post">
        <label for="txtId">Id</label>
        <input type="text" name="txtId" id="txtId">
        <br>
        <label for="txtNombre">Nombre</label>
        <input type="text" name="txtNombre" id="txtNombre">
        <br>
        <label for="txtApellido">Apellido
        <input type="text" name="txtApellido" id="txtApellido">
        <br>
        <label for="txtCorreo">Correo</label>
        <input type="text" name="txtCorreo" id="txtCorreo">
        <br>
        <label for="txtCalleAv">Calle o Avenida</label>
        <input type="text" name="txtCalleAv" id="txtCalleAv">
        <br>
        <label for="txtNoCasa">No. Casa</label>
        <input type="text" name="txtNoCasa" id="txtNoCasa">
        <br>
        <label for="txtZona">Zona</label>
        <input type="text" name="txtZona" id="txtZona">
        <br>
        <input type="submit" value="Guardar" name="btnGuardar" id="btnGuardar">
    </form>
</body>
</html>
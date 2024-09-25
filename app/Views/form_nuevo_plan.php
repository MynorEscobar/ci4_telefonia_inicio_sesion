<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nuevo plan</h1>
    <form action="<?=base_url("guardar_plan")?>" method="post">
        <label for="txtPlanId">Id</label>
        <input type="text" name="txtPlanId" id="txtPlanId">
        <br>
        <label for="txtNombre">Nombre</label>
        <input type="text" name="txtNombre" id="txtNombre">
        <br>
        <label for="txtPagoMensual">Pago mensual</label>
        <input type="text" name="txtPagoMensual" id="txtPagoMensual">
        <br>
        <label for="txtMinutos">Minutos</label>
        <input type="text" name="txtMinutos" id="txtMinutos">
        <br>
        <label for="txtMensajes">Mensajes</label>
        <input type="text" name="txtMensajes" id="txtMensajes">
        <br>
        <input type="submit" value="Guardar" name="btnGuardar" id="btnGuardar">
    </form>
</body>
</html>
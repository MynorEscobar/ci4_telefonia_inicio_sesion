<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planes</title>
</head>
<body>
    <h1>modificar plan</h1>
    <form action="<?=base_url("modificar_plan")?>" method="post">
        <label for="txtPlanId">Id</label>
        <input type="text" name="txtPlanId" id="txtPlanId"
        value="<?=$datos['plan_id']?>" readonly
        >
        <br>
        <label for="txtNombre">Nombre</label>
        <input type="text" name="txtNombre" id="txtNombre"
        value="<?=$datos['nombre']?>"
        >
        <br>
        <label for="txtPagoMensual">Pago mensual</label>
        <input type="text" name="txtPagoMensual" id="txtPagoMensual"
        value="<?=$datos['pago_mensual']?>"
        >
        <br>
        <label for="txtMinutos">Minutos</label>
        <input type="text" name="txtMinutos" id="txtMinutos" 
        value="<?=$datos['cantidad_minutos']?>">
        <br>
        <label for="txtMensajes">Mensajes</label>
        <input type="text" name="txtMensajes" id="txtMensajes" 
        value="<?=$datos['cantidad_mensajes']?>">
        <br>
        <input type="submit" value="Guardar cambios" name="btnGuardar" id="btnGuardar">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Planes</h1>
    <a href="<?=base_url('nuevo_plan')?>" class="btn btn-primary">Agregar Plan</a>
    <table class='table table-striped table-border'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Pago</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($datos as $plan):
            ?>
            <tr>
                <td><?php echo $plan['plan_id'];?></td>
                <td><?php echo $plan['nombre'];?></td>
                <td><?php echo $plan['pago_mensual'];?></td>
                <td>
                    <a href="<?=base_url('eliminar_plan/').$plan['plan_id'];?>" class="btn btn-danger">Eliminar</a>
                    <a href="<?=base_url('buscar_plan/').$plan['plan_id'];?>" class="btn btn-info">Modificar</a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
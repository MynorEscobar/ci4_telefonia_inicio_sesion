<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Clientes</h1>
    <a href="<?=base_url('nuevo_cliente')?>" class="btn btn-secondary">Nuevo</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($datos as $cliente):
            ?>
            <tr>
                <td><?php echo $cliente['cliente_id'];?></td>
                <td><?=$cliente['nombre']." ".$cliente['apellido'];?></td>
                <td><?=$cliente['correo_electronico'];?></td>
                <td><?=$cliente['calle_avenida'].
                " ".$cliente['no_casa'].
                " zona ".$cliente['zona'];?></td>
                <td>
                    <a href="<?=base_url('buscar_cliente/').$cliente['cliente_id'];?>">Modificar</a>
                    /
                    <a href="<?=base_url('eliminar_cliente/').$cliente['cliente_id'];?>">Eliminar</a>
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
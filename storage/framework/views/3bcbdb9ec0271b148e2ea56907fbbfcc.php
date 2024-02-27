<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de Asientos</title>
</head>
<body>
    <div class="container">        
    <h1>Mantenimiento Asientos</h1>
    <br>
    <a href="<?php echo e(route('tipAsi.crear')); ?>" class="btn btn-success">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id Tipo Asiento</th>
                <th>Descripci&oacute;n</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <body>
            <?php $__currentLoopData = $tipo_asientos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo_asiento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($tipo_asiento -> idTipoAsiento); ?></td>
                    <td><?php echo e($tipo_asiento -> descripcion); ?></td>
                    <td><?php echo e($tipo_asiento -> precio); ?></td>
                    <td><?php echo e($tipo_asiento -> estado); ?></td>
                    <td>
                        <a href="<?php echo e(route('asiento.editar', $tipo_asiento->idTipoAsiento)); ?>" class="btn btn-info">Editar</a>
                    </td>
                    <td>
                        <a href="<?php echo e(route('asiento.eliminar', $tipo_asiento->idTipoAsiento)); ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </body>

    </table>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\AerolineaAplicacion\resources\views/tiposAsientos.blade.php ENDPATH**/ ?>
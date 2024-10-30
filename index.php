<!DOCTYPE html>
<html>
<head>
    <title>Administración de Destinos Turísticos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Formulario para crear destino -->
        <h2>Agregar Destino</h2>
        <form method="post">
            <label>Nombre: <input type="text" name="nombre" class="form-control" required></label>
            <label>Descripción: <textarea name="descripcion" class="form-control" required></textarea></label>
            <label>Ubicación: <input type="text" name="ubicacion" class="form-control" required></label>
            <label>Precio Estimado: <input type="number" step="0.01" name="precio_estimado" class="form-control" required></label>
            <button type="submit" name="create" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar</button>
        </form>

        <!-- Formulario para actualizar destino -->
        <h2>Actualizar Destino</h2>
        <form method="post">
            <label>ID: <input type="number" name="id" class="form-control" required></label>
            <label>Nombre: <input type="text" name="nombre" class="form-control" required></label>
            <label>Descripción: <textarea name="descripcion" class="form-control" required></textarea></label>
            <label>Ubicación: <input type="text" name="ubicacion" class="form-control" required></label>
            <label>Precio Estimado: <input type="number" step="0.01" name="precio_estimado" class="form-control" required></label>
            <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-pencil"></i> Actualizar</button>
        </form>

        <!-- Formulario para eliminar destino -->
        <h2>Eliminar Destino</h2>
        <form method="post">
            <label>ID: <input type="number" name="id" class="form-control" required></label>
            <button type="submit" name="delete" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
        </form>

        <!-- Lista de destinos -->
        <h2>Lista de Destinos Turísticos</h2>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Ubicación</th>
                    <th>Precio Estimado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (getDestinos() as $destino): ?>
                <tr>
                    <td><?php echo $destino["id"]; ?></td>
                    <td><?php echo $destino["nombre"]; ?></td>
                    <td><?php echo $destino["descripcion"]; ?></td>
                    <td><?php echo $destino["ubicacion"]; ?></td>
                    <td><?php echo $destino["precio_estimado"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
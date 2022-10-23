<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM integrantes";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Seminario TI</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<center>
<?php
echo "Bienvenido al curso de Seminario de TIC’s $(hostname -i)"
?>
</center>

<body>
    <div class="container mt-5">
        <div class="row">


            <div class="col-md-3">
                <h1>Ingrese Datos</h1>
                <form action="insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="carnet" placeholder="Carnet">
                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                    <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Carnet</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['carnet'] ?></th>
                                <th><?php echo $row['nombres'] ?></th>
                                <th><?php echo $row['apellidos'] ?></th>
                                <th><?php echo $row['telefono'] ?></th>
                                <th><?php echo $row['correo'] ?></th>
                                <th><a href="delete.php?id=<?php echo $row['carnet'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
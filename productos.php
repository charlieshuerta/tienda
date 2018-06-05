<?php
    include("conexion.php");
    $consulta="SELECT * FROM productos";
    $query=$bd->prepare($consulta);
    $query->execute();
    $productos=$query->fetchAll();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        body{
            background-color:#aec0d2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de Productos</h1>
        <table class="table table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($x=0;$x<count($productos);$x++){
                ?>

                <tr class="table-light">
                    <td><?php echo $productos[$x]["nombre"]; ?></td>
                    <td><?php echo $productos[$x]["descripcion"]; ?></td>
                    <td><?php echo $productos[$x]["stock"]; ?></td>
                </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
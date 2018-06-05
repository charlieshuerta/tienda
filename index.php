<html>
<head>
    <meta charset="UTF-8">
    <title>Tienda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <style>
        body{
            background-color:#aec0d2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ingresar nuevo producto</h1>
        <form action="respuesta.php" method="post">
            <div>Nombre</div>
            <input type="text" name="nombre" class="form-control"><br>
            <div>Descripción</div>
            <textarea name="descripcion" cols="30" rows="6" class="form-control"></textarea><br>
            <div>Stock</div>
            <input type="number" name="stock" class="form-control"><br>
            <button class="btn btn-primary form-control">Guardar</button>
        </form>
    </div>
</body>
</html>
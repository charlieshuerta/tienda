<?php
    include("conexion.php");

    $nombre=$_POST["nombre"];
    $descripcion=$_POST["descripcion"];
    $stock=$_POST["stock"];

    $consulta=" INSERT INTO productos (nombre,descripcion,stock) VALUES ('".$nombre."','".$descripcion."','".$stock."')";

    $query=$bd->prepare($consulta);

    $query->execute();

    header("Location:productos.php")
?>
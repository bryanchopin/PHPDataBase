<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>brychxpin v1.1</title>
</head>
<body>
    <div class="container">
        <div class="containerTop">
            <div class="containerItemTop"></div>
            <div class="containerNav">
                <div class="containerItemNav"></div>
                <div class="containerItemNav"></div>
                <div class="containerItemNav"></div>
                <div class="containerItemNav"></div>
            </div>
            <div class="containerItemTop"></div>
        </div>
        <div class="containerCh">
            <div class="containerAside">
                <aside>
                    <div class="containerItemMenu"></div>
                    <div class="containerItemMenu"></div>
                    <div class="containerItemMenu"></div>
                    <div class="containerItemMenu"></div>
                    <div class="containerItemMenu"></div>
                </aside>
            </div>
            <div class="containerMain">
                <table">
                    <thead>
                      <th>No.</th>
                      <th>ID</th>
                      <th>Producto</th>
                      <th>Descripcion</th>
                      <th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
                    </thead>
                    <?php
                      include "conexion.php";
                      $sentecia= "SELECT * FROM productos";
                      $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
                      while($fila=$resultado->fetch_assoc())
                      {
                        echo "<tr>";
                          echo"<td>"; echo $fila['no']; echo "</td>";
                          echo "<td>"; echo $fila['id_producto']; echo "</td>";
                          echo "<td>"; echo $fila['nombre']; echo "</td>";
                          echo "<td>"; echo $fila['descripcion']; echo "</td>";
                          echo "<td> <a href='modif_prod1.php'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
                          echo " <td> <a href='eliminar_prod.php'> <button type='button' class='btn btn-danger'>Eliminar</button> </a> </td>";
                        echo "</tr>";
                      }
                    ?>
                  </table>
            </div>
        </div>
    </div>

</body>
</html>
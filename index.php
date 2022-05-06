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
            <div class="containerItemTop">
              <h2>LOGO</h2>
            </div>
            <div class="containerNav">
              <h1>CRUD PHP</h1>
            </div>
        </div>
        <div class="containerCh">
          <aside>
              <div class="newProduct">
                <div>
                  <h2>Alta de Nuevo Producto</h2>
                <form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
                  <div class="item">
                    <label>Id Producto: </label>
                    <input type="text" id="id_producto" name="id_producto">
                  </div>
                  <div class="item">
                    <label>Producto: </label>
                    <input type="text" id="producto" name="producto">
                  </div>
                  <div class="item">
                    <label>Descripcion: </label>
                    <textarea style="border-radius: 10px;"name="descripcion" ></textarea>
                  </div>
                  <div class="item">
                    <button type="submit" class="btn btn-success">Guardar</button>
                  </div>







                </form>
                </div>
              </div>
          </aside>
            <div class="containerMain">
              <div class="datagrid">
                <table>
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>ID</th>
                      <th>Producto</th>
                      <th>Descripcion</th>
                      <th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                          include "conexion.php";
                          $sentecia= "SELECT * FROM productos";
                          $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
                          while($fila=$resultado->fetch_assoc())
                          {
                            echo "<tr class='alt'>";
                              echo"<td>"; echo $fila['no']; echo "</td>";
                              echo "<td>"; echo $fila['id_producto']; echo "</td>";
                              echo "<td>"; echo $fila['nombre']; echo "</td>";
                              echo "<td>"; echo $fila['descripcion']; echo "</td>";
                              echo "<td> <a href='modif_prod1.php'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
                              echo " <td> <a href='eliminar_prod.php'> <button type='button' class='btn btn-danger'>Eliminar</button> </a> </td>";
                            echo "</tr>";
                          }
                    ?>
                  </tbody>
                </table>
              </div>

            </div>
        </div>
    </div>

</body>
</html>
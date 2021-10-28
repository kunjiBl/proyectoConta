<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Entrada y Salida</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>

    <font face="Georgia">
    <nav class="purple">
    <div class="nav-wrapper">
     <a class="brand-logo"><img src="img/logo.png" width="5%"></a>
     <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><a>Área Para Agregar Productos</a></li>
     </ul>
    </div>
    </nav>

  <div>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>PRODUCTO</th>
          <th>PRECIO UNITARIO (Q)</th>
          <th>UNIDAD DE MEDIDA</th>
          <th>CANTIDAD</th>
          <th>PRECIO TOTAL (Q)</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include('conexion.php');

                   $us=new conexion();
                   $q="SELECT `id`, `producto`, `precio`, `medida`, `cantidad` FROM `inventario`";
                   $rta=mysqli_query($us, $q);
                   while ($mostrar = mysqli_fetch_row($rta)){
        ?>
        <tr>
          <?php $total=$mostrar['2']*$mostrar['4'];?>
          <td><?php echo $mostrar['0'] ?></td>
          <td><?php echo $mostrar['1'] ?></td>
          <td><?php echo $mostrar['2'] ?></td>
          <td><?php echo $mostrar['3'] ?></td>
          <td><?php echo $mostrar['4'] ?></td>
          <td><?php echo $total ?></td>
          <td><a href="sp_eliminar.php? Id=<?php echo $mostrar['0'] ?>">Eliminar</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</font>
<div>

<form  action="agregar1.html" method="post">
  <button class="btn waves-effect waves-light" type="submit" name="action"><font face="Georgia">Agregar</font>
   <i class="material-icons right">add</i>
  </button>
</form>
<br>
<form  action="admin.html" method="post">
  <button class="btn waves-effect waves-light" type="submit" name="action"><font face="Georgia">Regresar</font>
   <i class="material-icons right">keyboard_return</i>
  </button>
</form>

</div>
  </body>
</html>

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
          <th>NOMBRE</th>
          <th>PUESTO</th>
          <th>SUELDO</th>
          <th>BONIFICACIÓN</th>
          <th>TOTAL DEVENGADO</th>
          <th>IGSS</th>
          <th>PRESTAMO</th>
          <th>ANTICIPO</th>
          <th>DESCUENTOS</th>
          <th>LÍQUIDO</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include('conexion.php');

                   $us=new conexion();
                   $q="SELECT `id`, `nombre`, `puesto`, `sueldo`, `bonificación`, `total_devengado`, `igss`, `prestamo`, `anticipo` FROM `trabajadores`";
                   $rta=mysqli_query($us, $q);
                   while ($mostrar = mysqli_fetch_row($rta)){
        ?>
        <tr>
          <?php $dev=$mostrar['3']+$mostrar['4'];?>
          <?php $IGSS=$mostrar['3']*0.0483;?>
          <?php $desc=$IGSS+$mostrar['7']+$mostrar['8'];?>
          <?php $liquido=$dev-$desc;?>
          <td><?php echo $mostrar['0'] ?></td>
          <td><?php echo $mostrar['1'] ?></td>
          <td><?php echo $mostrar['2'] ?></td>
          <td><?php echo $mostrar['3'] ?></td>
          <td><?php echo $mostrar['4'] ?></td>
          <td><?php echo $dev ?></td>
          <td><?php echo $IGSS ?></td>
          <td><?php echo $mostrar['7'] ?></td>
          <td><?php echo $mostrar['8'] ?></td>
          <td><?php echo $desc ?></td>
          <td><?php echo $liquido ?></td>
          <td><a href="sp_eliminarT.php? Id=<?php echo $mostrar['0'] ?>">Eliminar</a></td>
        </tr>
        <?php
      }
        ?>
      </tbody>
    </table>
  </div>
</font>
<div>

<form  action="agregar.html" method="post">
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

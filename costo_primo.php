<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Costo Primo</title>
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
       <li><a>Costo Primo</a></li>
     </ul>
    </div>
    </nav>

  <div>
    <table>
      <thead>
        <tr>
          <th>Materia Prima Directa</th>
          <th>Mano de Obra Directa</th>
          <th>Costo Primo</th>
        </tr>
      </thead>

        

      <tbody>
        <?php
          $liquidoArray = array();
          $arrayPrecio = array();
          $arrayCantidad = array();
          $total = array();
          
          include('conexion.php');
          
                   $us=new conexion();
                   $q="SELECT `sueldo`, `bonificación`, `total_devengado`, `igss`, `prestamo`, `anticipo`, `puesto`, i.`precio`, i.`cantidad`, i.`id`  FROM `trabajadores`   join `inventario`i  ";
                   $rta=mysqli_query($us, $q);
                   while ($mostrar = mysqli_fetch_row($rta)){

                    $dev=$mostrar['0']+$mostrar['1'];
                    $IGSS=$mostrar['0']*0.0483;
                    $desc=$IGSS+$mostrar['4']+$mostrar['5'];
                    $liquido=  $dev-$desc;
                    $manoObra = 0;

                    $precio = $mostrar['7'];
                    $cantidad = $mostrar['8'];

                    if( ($mostrar['6'] == "Barista") || ($mostrar['6'] == "Cocinero") ){
                      $liquidoArray["1-($liquido)"] = $liquido;
                    }
                    $manoObra = array_sum($liquidoArray);  
                    
                    $contId = $mostrar['9'];
                      $arrayPrecio[$contId] = $precio;
                      $arrayCantidad[$contId] = $cantidad;
                    
                      $total[$contId] =   $arrayPrecio[$contId] * $arrayCantidad[$contId] ;
  
        ?>        
        <?php        
      }  
        ?>

        <tr>
          <td><?php echo array_sum($total)?></td>
          <td><?php echo $manoObra?></td>
          <td><?php echo $manoObra + array_sum($total)?></td>
        </tr>

      </tbody>
    </table>
  </div>
</font>
<div>

<br>
<form  action="admin.html" method="post">
  <button class="btn waves-effect waves-light" type="submit" name="action"><font face="Georgia">Regresar</font>
   <i class="material-icons right">keyboard_return</i>
  </button>
</form>

</div>
  </body>
</html>

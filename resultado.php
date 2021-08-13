<?php 
      $empleado = $_POST['empleado'];
      $nombre = $_POST['nombre'];
      $sueldo_base = $_POST['sueldo_base'];
      $salario = $_POST['salario'];
      $comisiones = $_POST['comisiones'];
      $descuentos = $sueldo_base-$salario+$comisiones;
      echo "Codigo del empleado: ".$empleado."<br>";
      echo "Nombre del empleado ".$nombre."<br>";
      echo "Sueldo Base: ".$sueldo_base."<br>";
      echo "Sueldo Liquido: ".$salario."<br>";
      echo "Total descuentos: ".$descuentos;
 ?>

<?php
        $producto1 = $_POST['producto1'];
        $precio1 = $_POST['precio1'];
        
        $producto2 = $_POST['producto2'];
        $precio2 = $_POST['precio2'];
        
        $producto3 = $_POST['producto3'];
        $precio3 = $_POST['precio3'];
        
        $total = $precio1 + $precio2 + $precio3;
        $descuento = $total * 0.16;
        $totalPagar = $total - $descuento;
echo "Producto1:".$producto1;
echo"<br>";
  echo "Precio1:".$precio1;
echo"<br>";
  echo "Producto2:".$producto2;
echo"<br>";
  echo "Precio2:".$precio2;
echo"<br>";
echo "Producto2:".$producto3;
echo"<br>";
  echo "Precio2:".$precio3;
echo"<br>";
  echo "Total a pagar:".$total;
echo"<br>";
 echo "Descuento (16%):".$descuento;
echo"<br>";
   echo "Total a pagar:".$totalPagar;
 ?>

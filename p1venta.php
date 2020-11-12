<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>VENTA DE PRODUCTOS</h1>
			</div>

			<div class="articulo">
				<article>
                    <img src="lasimagenes/bannerElec.jpg" alt="" width="600" height="300">
                    <br>
                    <br>
                    <?php
 error_reporting(0);

 $producto=$_POST['selProducto'];

 $precio=0;
 switch ($producto){
 case 'Lavadora': $precio=1500; break;
 case 'Refrigeradora': $precio=3500; break;
 case 'Radiograbadora': $precio=500; break;
 case 'Tostadora': $precio=150;
 }

 if ($producto=='Lavadora') $selL='SELECTED'; else $selL="";
 if ($producto=='Refrigeradora') $selRe='SELECTED'; else $selRe="";
 if ($producto=='Radiograbadora') $selRa='SELECTED'; else $selRa="";
 if ($producto=='Tostadora') $selT='SELECTED'; else $selT="";
 ?>
                    <form method="POST" name="frmVenta">
 <table border="0" width="500" cellspacing="0" cellpadding="0">
 <tr>
 <td>Producto</td>
 <td><select name="selProducto" onchange="this.form.submit()">
 <option value="Lavadora" <?php echo $selL;?>>
 Lavadora</option>
 <option value="Refrigeradora" <?php echo $selRe;?>>
 Refrigeradora</option>
 <option value="Radiograbadora" <?php echo $selRa;?>>
 Radiograbadora</option>
 <option value="Tostadora" <?php echo $selT;?>>
 Tostadora</option>
 </select>
 </td>
 </tr>
 <tr>
 <td>Precio</td>
 <td>
 <input type="text" name="txtPrecio" readonly="readonly"
 value="<?php
 if ($_POST[selProducto])
 echo number_format($precio,'2','.','');
 ?>" />
 </td>
 </tr>
 <?php
 $cantidad=$_POST['txtCantidad'];
 $subtotal=$cantidad*$precio;
 ?>
 <tr>
 <td>Cantidad</td>
 <td>
 <input type="text" name="txtCantidad"
 value="<?php echo $cantidad; ?>" />
 </td>
 <td>
 <input type="submit" value="Calcular" name="btnCalcular" />
 </td>
 </tr>

 <tr>
 <td>Subtotal</td>
 <td><input type="text" name="txtSubtotal"
 value="<?php
 echo '$'.number_format($subtotal,'2','.',''); ?>"
 />
 </td>
 </tr>
 <tr>
 <td>Cuotas</td>
 <td>
 <select name="selCuotas"
 onchange="this.form.submit()">
 <option value="3">3</option>
 <option value="6">6</option>
 <option value="9">9</option>
 <option value="12">12</option>
 </select>
 </td>
 </tr>
 <?php
 if ($_POST['selCuotas']) {
 ?>
 <tr id="fi la">
 <td>Nº Letras</td>
 <td>Monto</td>
 </tr>
 <?php
 $cuotas=$_POST['selCuotas'];
 $i=1;
 $montoMensual = $subtotal/$cuotas;
 while($i<=$cuotas){
 ?>
 <tr>
 <td><?php echo $i; ?></td>
 <td>
 <?php echo '$'.number_format($montoMensual,'2','.','');?>
 </td>
 </tr>
 <?php
 $i++;
 }
 }
 ?>
 </table>
 </form>
                <br><h2>Explicacion del problema</h2> <br>
    
               
               Los datos de los valores capturados en el formulario se almacenan
                en las variables para las distintas para variables y posteriormente 
                son mostrados en una lista que muestra el resultado de esos valores en cuotas
               

				</article>
			</div>
		<!-- {El archivo siderbar.php dentro de miplantilla} -->
		<?php include('miplantilla/sidebar.php');?> 

		</div>
	</section>
	<!-- {El archivo footer.php dentro de miplantilla} -->
	<?php include('miplantilla/footer.php');?> 
</body>
</html>
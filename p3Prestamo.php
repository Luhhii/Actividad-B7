<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Préstamo en banco</h1>
			</div>

			<div class="articulo">
				<article>
                <img src="lasimagenes/prestamo.jpg" alt="" width="400" height="300">
                <br>
                <br>
                <?php 
                error_reporting(0);

 $cliente=$_POST['txtCliente'];
 $monto=$_POST['txtMonto'];
 $cuotas=$_POST['selCuotas'];

 if ($cuotas==3) $sel3='SELECTED'; else $sel3="";
 if ($cuotas==6) $sel6='SELECTED'; else $sel6="";
 if ($cuotas==9) $sel9='SELECTED'; else $sel9="";
 if ($cuotas==12) $sel12='SELECTED'; else $sel12="";

 $mCliente='';
 $mMonto='';
 if (empty($cliente))
 $mCliente='Debe registrar nombre del cliente';
 if(empty($monto) || !is_numeric($monto))
 $mMonto='Debe registrar correctamente el monto de préstamo';
 elseif($monto<=0)
 $mMonto='El monto prestamos no debe ser inferior a 0';
 ?>
 <form method="POST" name="frmPrestamo" action="p3Prestamo.php">
 <table border="0" width="650" cellspacing="10" cellpadding="0">
 <tr>
 <td width="">Cliente</td>
 <td>
 <input type="text" name="txtCliente" size="70"
 value="<?php echo $_POST['txtCliente']; ?>" />
 </td>
 <td width="200" id="error"><?php echo $mCliente; ?> </td>
 </tr>
 <tr>
 <td>Monto Prestado</td>
 <td>
 <input type="text" name="txtMonto"
 value="<?php echo $_POST['txtMonto']; ?>" />
 </td>
 <td id="error"><?php echo $mMonto; ?></td>
 </tr>
 <tr>
 <td>Nº Cuotas</td>
 <td><select name="selCuotas">
 <option value="3" <?php echo $sel3;?> >3</option>
 <option value="6" <?php echo $sel6;?> >6</option>
 <option value="9" <?php echo $sel9;?> >9</option>
 <option value="12" <?php echo $sel12;?> >12</option>
 </select>
 </td>
 <td></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="Cotizar" /></td>
 </tr>
 </table>
 <?php if(!empty($cliente) && !empty($monto)) { ?>
 <table border="0" width="650" cellspacing="10" cellpadding="0">
 <tr id="fi la">
 <td>Nº DE CUOTA</td>
 <td>FECHAS DE PAGO</td>
 <td>MONTO MENSUAL</td>
 </tr>
 <?php
 switch ($cuotas){
 case 3: $montoMensual=($monto*1.05)/$cuotas; break;
 case 6: $montoMensual=($monto*1.07)/$cuotas; break;
 case 9: $montoMensual=($monto*1.10)/$cuotas; break;
 case 12: $montoMensual=($monto*1.20)/$cuotas;
 } //Cierre del switch

 $fecha = date('d-m-Y');
 for($i=1;$i<=$cuotas;$i++){
 ?>
 <tr>
 <td><?php echo $i.' cuota';?></td>
 <td>
 <?php echo date('d/m/Y', strtotime("$fecha +$i month"));?>
 </td>
 <td>
 <?php echo '$'.number_format($montoMensual,'2','.',''); ?>
 </td>
 </tr>
 <?php } //Cierre del for ?>
 </table>
 <?php } //Cierre del if ?>
 </form>
    <br><h2>Explicacion del problema para calcular salario</h2> <br>
					<p>Los datos de los valores capturados en el formulario se almacenan
                en las variables para las distintas para variables y posteriormente 
				mostrar el resultados de los pagos a realizar indicando tambien la 
				fecha de pago con diferencia de 30 dias a partir de la fecha automatica del sistema donde 
				se registre el usuario</p>

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
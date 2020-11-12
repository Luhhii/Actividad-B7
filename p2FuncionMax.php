<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Función Max</h1>
			</div>

			<div class="articulo">
				<article>
                <img src="lasimagenes/max.jpg" alt="" width="600" height="300">
                <?php
 $números=array(1,4,26,7);
 echo '   El elemento mayor es: '.max($números); //Resp: 26
?>
            <br><h2>Explicacion del problema para calcular salario</h2> <br>
					<p>Se llama una variable donde colocaremos</p>
					<br/>
					<p>distintos valores (en este caso
					</p>
					<br/>
					<p>esos valores son 1, 4, 26, 7) y la funcion</p>
					<br>
					<p>Max se encargará de elegir el valor mas alto</p>

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
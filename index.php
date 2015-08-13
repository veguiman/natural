<!DOCTYPE html>
<html lang="en">
<?php include('template/layout/head.php');?>
<body>
	<!-- Cabecera -->
	<header id="header">
		<?php include('template/includes/menu.php'); ?>
	</header>

		<!-- Contenido -->
		<div class="row">
			<div class="col-lg-12">
				<?php include('template/components/slider.php'); ?>
			</div>
			<!-- Formulario -->
			<div class="col-lg-12">
				<?php include('template/components/formulario.php'); ?>
			</div>
		</div>
	<!-- Pie de Pagina -->
	<footer  class="pie-pagina">
		<?php include('template/includes/footer.php'); ?>
	</footer>
	<!-- Carga de Scripts-->
	<?php include('template/layout/scripts.php'); ?>

	<!--Parametros Carga de Slider-->
	<script type="text/javascript">
		$(document).ready(function() {
 
		 	if($('#rsDemoWrapper').length){


		     $('.tp-banner').revolution(
		                {
		                    delay:8000,
		                    startwidth:1920,
		                    startheight:1080,
		                    hideThumbs:10,
		                    fullWidth:"on",
		                    forceFullWidth:"on"
		                });

		     $('#rsDemoWrapper').css('visibility', 'visible');
		    }

		});
	</script>  
</body>
</html>
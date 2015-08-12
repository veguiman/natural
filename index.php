<!DOCTYPE html>
<html lang="en">
<?php include('template/layout/head.php');?>
<body>
	<!-- Cabecera -->
	<header id="header">
		<?php include('template/includes/menu.php'); ?>
	</header>

	
		<div class="row">
			<!-- Contenido -->
			<div class="col-lg-12">
				
				<?php include('template/components/slider.php'); ?>
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
 
		  $("#owl-demo").owlCarousel({
		 	  autoplay:5000,
		 	  autoplay:true,
		 	  stopOnHover : true,
		      navigation : true, // Show next and prev buttons
		      paginationSpeed : 1000,
		      goToFirstSpeed : 2000,
		      singleItem:true,
		      transitionStyle:"fade"

		      // "singleItem:true" is a shortcut for:
		      // items : 1, 
		      // itemsDesktop : false,
		      // itemsDesktopSmall : false,
		      // itemsTablet: false,
		      // itemsMobile : false
		 
		  });
 
		});
	</script>  
</body>
</html>
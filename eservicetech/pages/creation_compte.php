<?php include('includes/head.php');?>
	<body>

<?php include('includes/header.php');?>

		<div class="header-bg">

			<!-- HEADER IMAGE : begin -->
			<!-- To add more images just copy and edit elements with "image-layer" class (see home-2.html template for example)
			Change autoplay speed with "data-autoplay" attribute (in seconds), works only if there are more than one image -->
			<div class="header-image" data-autoplay="8">
				<div class="image-layer" style="background-image: url( 'images/header-01.jpg' );"></div>
				<!-- div class="image-layer" style="background-image: url( 'images/header-02.jpg' );"></div -->
			</div>
			<!-- HEADER IMAGE : begin -->

		</div>
		<!-- HEADER BG : end -->

		<!-- CORE : begin -->
		<div id="core">
			<div class="c-container">
				<div class="row">

					<!-- MIDDLE COLUMN : begin -->
							<?php include('includes/fiche_inscription.php'); ?>
					<!-- LEFT COLUMN : begin -->
					<div class="left-column col-md-3 col-md-pull-6">

							<?php include('includes/menu.php'); ?>

							<?php include('includes/left_sidebar.php'); ?>

							<?php include('includes/right_sidebar.php'); ?>

					</div>

				</div>
			</div>
		</div>
		<!-- CORE : end -->

							<?php include('includes/footer.php'); ?>

		<!-- SCRIPTS : begin -->
		<script src="library/js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="library/js/third-party.js" type="text/javascript"></script>
		<script src="library/js/library.js" type="text/javascript"></script>
		<script src="library/js/scripts.js" type="text/javascript"></script>
		<!-- SCRIPTS : end -->

	</body>
</html>
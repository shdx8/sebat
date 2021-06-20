<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<?= @$head; ?>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
	<!-- <script>
		NProgress.configure({
			showSpinner: false
		});
		NProgress.start();

	</script> -->
	<div class="wrapper">

		<!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
		<aside class="left-sidebar bg-sidebar">
			<?= @$sidebar; ?>
		</aside>

		<div class="page-wrapper">
			<!-- Header -->
			<header class="main-header " id="header">
				<?= @$topbar; ?>
			</header>
			<div class="content-wrapper">
				
				<?= @$content; ?>




			<footer class="footer mt-auto">
				<?= @$footer; ?>
			</footer>
			</div>

		</div>
	</div>


	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
	<script src="<?= base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/toaster/toastr.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/charts/Chart.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/ladda/spin.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/ladda/ladda.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/select2/js/select2.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/jekyll-search.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/sleek.js"></script>
	<script src="<?= base_url(); ?>/assets/js/chart.js"></script>
	<script src="<?= base_url(); ?>/assets/js/date-range.js"></script>
	<script src="<?= base_url(); ?>/assets/js/map.js"></script>
	<script src="<?= base_url(); ?>/assets/js/custom.js"></script>




</body>

</html>

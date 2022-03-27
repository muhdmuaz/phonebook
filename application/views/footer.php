
<footer class="main-footer">
	<div class="float-right d-none d-sm-block">
		<b>Version</b> 3.2.0
	</div>
	<strong>Copyright &copy; 2022 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
	<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>

<!-- Page-Level Plugin Scripts -->
<?php
if (isset($pluginjs) && (count($pluginjs) > 0)) {
	foreach( $pluginjs as $js) { ?>
		<script src="<?php echo base_url($js); ?>"></script>
	<?php	}
}
?>

<!-- Page-Level Plugin CSS -->
<?php
if (isset($plugincss) && (count($plugincss) > 0)) {
	foreach( $plugincss as $pj) { ?>
		<link href="<?php echo base_url($pj); ?>" rel="stylesheet">
	<?php	}
}
?>

<!-- Page-Level JS Scripts -->
<?php
if (isset($pagejs) && (count($pagejs) > 0)) {
	foreach( $pagejs as $js) { ?>
		<script src="<?php echo base_url($js); ?>"></script>

	<?php	}
}
?>

</body>
</html>

</div><!-- /container-fluid in header -->
<script>

	var base_url = '<?php echo site_url(); ?>';
</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js') ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>



<script>
	var userid = '<?php echo $userid; ?>';
	$(document).ready(function() {
		$("#mytable").DataTable({
			"processing" : true,
			"serverSide" : true,
			"order" : [],
			"ajax" : {
				"url" : base_url + "/phonebook/phonebook_json/" + userid ,
				"type" : "POST"
			},
			"columns" : [
				{ "data" : "id"},
				{ "data" : "contact_name" },
				{ "data" : "contact_number"},
				{ "data" : "userid"},
				{ "data" : "action"},
			],
		})

	})
</script>

</body>
</html>

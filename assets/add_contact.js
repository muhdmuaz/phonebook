var userid
$(document).ready(function() {
	$('#mytable').DataTable({
		"ajax": {
			url : base_url + "/phonebook/phonebook_dtable/" + userid,
			type : 'POST',
			serverSide: true
		},
	});
});

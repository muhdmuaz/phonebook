$(document).ready(function () {
	var oTable = $('#mytable').dataTable({


		"order": [[3, "desc"]],

		"aoColumnDefs": [
			{'bSortable': true, 'aTargets': [3]},
			{'bSearchable': false},
		],

		"bProcessing": true,
		//  "bServerSide": true,
		"serverSide": false,
		"sAjaxSource": base_url + "/project/next_issues_dtable/" + project_id,
		"bJQueryUI": false,
		"pageLength": 2,
		"bLengthChange": false,
		"bFilter": true,
		"bInfo": false,
		"bAutoWidth": false,
		"sPaginationType": "full_numbers",
		"iDisplayStart ": 20,
		"fnInitComplete": function () {
			//oTable.fnAdjustColumnSizing();
		},
		'fnServerData': function (sSource, aoData, fnCallback) {
			$.ajax
			({
				'dataType': 'json',
				'type': 'POST',
				'url': sSource,
				'data': aoData,
				'success': fnCallback
			});
		},
		"columns": [
			{"data": "ni_id", 'bSearchable': false},
			{"data": "issue_title", 'bSearchable': true},
			{"data": "username", 'bSearchable': false},
			{"data": "status", 'bSearchable': true},
			{"data": "created_at", 'bSearchable': false},
			{
				"data": "ni_id", "render": function (data, type, full, meta) {
					var details = '<a href="#" class="btn btn-info" data-toggle="modal" href="#myDetails" onclick="view_details(' + data + ')" >View Details</a>';
					return details;
				}
			}
		]
	});

})



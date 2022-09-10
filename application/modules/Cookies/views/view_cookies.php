<!-- End Navbar -->
<div class="panel-header panel-header-lg"></div>
<div class="content">
<?php $this->load->view('notification'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card  card-tasks">
				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
				<div class="table-header row">
					<div class="col-md-2">
						<h2>View Cookies</h2>
					</div>
					<div class="col-md-8"></div>
					<div class="col-md-2">
						<a href="<?=base_url(); ?>cookies/add_cookies" class="btn btn-primary" >Add Cookies</a>
					</div>					
				</div>
				<table id="cookies_table" class="table table-striped table-bordered table-hover display responsive nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Cookie Name</th>
							<th>Cookie<br>Provider</th>
							<th>Cookie<br>Group</th>
							<th>Description</th>
							<th>Cookie<br/>Lifetime</th>
							<th>Cookie<br/>Type</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var table = "";
	$(document).ready(function(){
		getTable();
	});

	function getTable()
	{
		table = $('#cookies_table').dataTable({
			"bServerSide": true,
			"bProcessing": true,
			"bDeferRender": true,
			"aoColumnDefs": [
				{ "width": "15%", "targets": [1] },
				{ "width": "40%", "targets": [4] },
			],
			"aoColumns": [
				{ "bSortable": false },
				{ "bSortable": true },
				{ "bSortable": true },
				{ "bSortable": true },
				{ "bSortable": true },
				{ "bSortable": true },
				{ "bSortable": true },
				{ "bSortable": false }
			],
			"iDisplayLength": 20,
			"aLengthMenu": [20, 40, 60, 80, 100],
			"fnServerParams":function ( aoData ) {
			},
			"bInfo":false,
			"aaSorting": [[ 0, "desc" ]],
			"sAjaxSource": "<?php echo base_url(); ?>cookies/get_cookies",
			"fnDrawCallback": function () {
			}
		} );
	}
</script>
<!-- End Navbar -->
<div class="panel-header panel-header-lg"></div>
<div class="content">
<?php //$this->load->view('notification'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card  card-tasks">
				<div class="clearfix">
					<div class="pull-right tableTools-container"></div>
				</div>
				<div class="table-header row">
					<div class="col-md-4">
						<h2>View Cookies Group</h2>
					</div>
					<div class="col-md-6"></div>
					<div class="col-md-2">
						<a href="<?=base_url();?>app_cookies_group/add_cookies_group/<?=$shop?>" class="btn btn-primary" >Add Cookies Group</a>
					</div>					
				</div>
				<table id="cookies_group_table" class="table table-striped table-bordered table-hover display responsive nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Cookie Group<br/>Name</th>
							<th>Description</th>
							<th>Is<br/>Essential</th>
							<th>Is<br/>Enabled</th>
							<th>Sort<br/>Order</th>
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
		table = $('#cookies_group_table').dataTable({
			"bServerSide": true,
			"bProcessing": true,
			"bDeferRender": true,
			"aoColumnDefs": [
				{ "width": "15%", "targets": [1] },
				{ "width": "45%", "targets": [2] },
			],
			"aoColumns": [
				{ "bSortable": false },
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
			"sAjaxSource": "<?=base_url();?>app_cookies_group/get_cookies_group/<?=$shop?>",
			"fnDrawCallback": function () {
			}
		} );
	}
</script>
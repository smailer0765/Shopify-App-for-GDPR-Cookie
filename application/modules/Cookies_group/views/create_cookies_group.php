<!-- End Navbar -->
<div class="panel-header panel-header-lg"></div>
<div class="content">
<?php $this->load->view('notification'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card  card-tasks">
				<div class="pagetitle">
					<h2>Create New Cookies Group</h2>
				</div>
				<form class="form-horizontal" method="post" action="<?=base_url();?>cookies_group/create_new_cookies_group/" id="cookies_group" >
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="is_enabled"> Enabled </label>
						<div class="col-sm-9">
							<select id="is_enabled" name="is_enabled" class="col-xs-10 col-sm-5">
								<option value="No"> No </option>
								<option value="Yes" selected> Yes </option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="is_essential"> Is Essential </label>
						<div class="col-sm-9">
							<select id="is_essential" name="is_essential" class="col-xs-10 col-sm-5">	
								<option value="No"> No </option>
								<option value="Yes"> Yes </option>
							</select>
						</div>
					</div>
					
					<div class="form-group" enctype="multipart/form-data">
						<label class="col-sm-3 control-label no-padding-right" for="group_name"> Cookie Group Name *</label>
						<div class="col-sm-9">
							<input type="text" id="group_name" name="group_name" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="group_description"> Description *</label>
						<div class="col-sm-9">
							<textarea id="group_description" name="group_description" rows="5" class="col-xs-10 col-sm-5"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="assigned_cookies"> Assigned Cookies </label>
						<div class="col-sm-9">
							<select multiple="" class="col-xs-10 col-sm-5" name="assigned_cookies[]" id="assigned_cookies" >
								<?php if(!empty($cookies)){
									foreach($cookies as $cookie){ ?>
										<option value="<?=$cookie['cookie_name']?>" ><?=$cookie['cookie_name']?></option>
								<?php } }?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="is_deleted"> Sort Order </label>
						<div class="col-sm-9">
							<input type="number" id="sort_order" name="sort_order" class="col-xs-10 col-sm-5" value="0" />
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sd-9 col-sm-offset-3">
							<div class="col-xs-10 col-sm-5">
								<input type="button" class="btn btn-success btn-sm" name="add_cookies_group_btn" id="add_cookies_group_btn" value="Save">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
     $("#cookies_group").validate({
        rules: {
			group_name: "required",
			group_description: "required",
		},
		messages:{
            group_name: "Please Enter Group Name",
            group_description: "Please Enter Group Description",
		}
    });

    $(document).ready(function(){
        $("#add_cookies_group_btn").click(function(){
            if($("#cookies_group").valid()){
                $("#cookies_group").submit();
            }
        });
    });
</script>
<!-- End Navbar -->
<div class="panel-header panel-header-lg"></div>
<div class="content">
<?php $this->load->view('notification'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card card-tasks">
				<div class="pagetitle">
					<h2>Create New Cookies</h2>
				</div>
				<form class="form-horizontal" method="post" action="<?=base_url();?>cookies/create_new_cookies/" id="cookies" >
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="is_enabled"> Enabled </label>
						<div class="col-sm-9">
							<select id="is_enabled" name="is_enabled" class="col-xs-10 col-sm-5">
								<option value="No"> No </option>
								<option value="Yes" selected> Yes </option>
							</select>
						</div>
					</div>
					
					<div class="form-group" enctype="multipart/form-data">
						<label class="col-sm-3 control-label no-padding-right" for="cookie_name"> Cookie Name *</label>
						<div class="col-sm-9">
							<input type="text" id="cookie_name" name="cookie_name" class="col-xs-10 col-sm-5" />
						</div>
					</div>
					
					<div class="form-group" enctype="multipart/form-data">
						<label class="col-sm-3 control-label no-padding-right" for="cookie_provider"> Cookie Provider </label>
						<div class="col-sm-9">
							<input type="text" id="cookie_provider" name="cookie_provider" class="col-xs-10 col-sm-5" />
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="cookie_description"> Description *</label>
						<div class="col-sm-9">
							<textarea id="cookie_description" name="cookie_description" rows="5" class="col-xs-10 col-sm-5"></textarea>
						</div>
					</div>
		
					<div class="form-group" enctype="multipart/form-data">
						<label class="col-sm-3 control-label no-padding-right" for="cookie_lifetime"> Cookie Lifetime </label>
						<div class="col-sm-9">
							<input type="text" id="cookie_lifetime" name="cookie_lifetime" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="cookie_type"> Cookie Type </label>
						<div class="col-sm-9">
							<select class="col-xs-10 col-sm-5" name="cookie_type" id="cookie_type" >
								<option value="1st Party">1st Party</option>
								<option value="3rd Party">3rd Party</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="cookie_group"> Cookie Group </label>
						<div class="col-sm-9">
							<select id="cookie_group" name="cookie_group" class="col-xs-10 col-sm-5">
								<option value="None"> None </option>
								<?php if(!empty($groups)){
									foreach($groups as $group){ ?>
										<option value="<?=$group['group_name']?>" ><?=$group['group_name']?></option>
								<?php } }?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sd-9 col-sm-offset-3">
							<div class="col-xs-10 col-sm-5">
								<input type="button" class="btn btn-success btn-sm" name="add_cookies_btn" id="add_cookies_btn" value="Save">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
     $("#cookies").validate({
        rules: {
			cookie_name: "required",
			cookie_description: "required",
		},
		messages:{
            cookie_name: "Please Enter Cookie Name",
            cookie_description: "Please Enter Cookie Description",
		}
    });

    $(document).ready(function(){
        $("#add_cookies_btn").click(function(){
            if($("#cookies").valid()){
                $("#cookies").submit();
            }
        });
    });
</script>
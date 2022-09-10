<div class="row">
    <div class="col-xs-12">
		<?php $this->load->view('notification'); ?>
        <!-- PAGE CONTENT BEGINS -->
        <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
		
            <i class="ace-icon fa fa-check green"></i>
            Welcome to
            <strong class="green">
                <?php echo ucfirst($logedin['check_user']); ?> Panel
            </strong>
        </div>
        <div class="hr hr32 hr-dotted"></div>
        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
        
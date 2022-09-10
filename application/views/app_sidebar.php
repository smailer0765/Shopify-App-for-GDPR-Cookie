<div id="sidebar" class="sidebar responsive"> 
	<script type="text/javascript">
    	try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <ul class="nav nav-list">
        <li class="<?=($title=="Dashboard")?"active":"";?>">
            <a href="<?php echo base_url(); ?>app_home/dashboard/<?=$shop;?>">
                <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text"> Dashboard </span>
            </a>
            <b class="arrow"></b>
        </li>
		<li class="<?=($title=="Cookies Group")?"active":"";?>">
			<a href="<?php echo base_url(); ?>app_cookies_group/dashboard/<?=$shop;?>">
				<i class="menu-icon fa fa-cogs"></i> <span class="menu-text"> Cookies Group </span>
			</a>
		</li>
		<li class="<?=($title=="Cookies")?"active":"";?>">
			<a href="<?php echo base_url(); ?>app_cookies/dashboard/<?=$shop;?>">
				<i class="menu-icon fa fa-cogs"></i> <span class="menu-text"> Cookies </span>
			</a>
		</li>
		<li class="<?=($title=="Settings")?"active":"";?>">
			<a href="<?php echo base_url(); ?>app_home/setting/<?=$shop;?>">
				<i class="menu-icon fa fa-gear"></i> <span class="menu-text"> Settings </span>
			</a>
		</li>
		<!--<li class="">
			<a href="<?=base_url();?>home/logout">
				<i class="menu-icon fa fa-power-off"></i> <span class="menu-text"> Logout </span>
			</a>
		</li>-->
    </ul>
  <!-- /.nav-list -->
  
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    	<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"> </i>
    </div>
	<script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script> 
</div>
<!-- MAIN CONTENT START HERE AND END IN ADMIN/FOOTER.PHP -->

<div class="main-content">
  <div class="main-content-inner">
    <!-- <div class="breadcrumbs" id="breadcrumbs"> 
      <script type="text/javascript">
			try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
		</script> 
    </div> -->
    <div class="page-content">
      <!-- /.page-header -->
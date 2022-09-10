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
				<div class="row">
					<div class="col-md-4">
						<h1>Dashboard</h1>
					</div>					
				</div>
				<div class="Polaris-Layout__Section">
					<div class="Polaris-Card">
						<div class="Polaris-Card__Section">
							<div class="Polaris-Card__SectionHeader">
								<h2 class="Polaris-DisplayText Polaris-DisplayText--sizeLarge">Hi <?=$logedin['full_name']?>,</h2>
							</div>
							<p>Welcome to Advanced GDPR EU Cookie Bar</p>
						</div>
					</div>
				</div>
				<div class="Polaris-Layout__Section">
					<div class="Polaris-Card">
						<div class="Polaris-Card__Header">
							<h4 class="Polaris-Heading">Enable GDPR Cookie</h4>
						</div>
						<div class="Polaris-Card__Section d-flex">
							<p>GDPR Cookie is enabled on your shop. Turn Off to disable this app</p>
							<label class="switch small ml-auto">
								<label class="Polaris-Choice Polaris-Choice--labelHidden">
									<span class="Polaris-Choice__Control">
										<span class="Polaris-Checkbox">
											<input id="bannerenable" type="checkbox" name="banner_enable" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" <?=( $row['enable_cookie'] == 1 )?"checked":"";?> value="1">
											<span class="Polaris-Checkbox__Backdrop"></span>
											<span class="Polaris-Checkbox__Icon">
												<span class="Polaris-Icon">
													<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
														<path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
													</svg>
												</span>
											</span>
										</span>
									</span>
								</label>
							</label>
						</div>
					</div>
				</div>
				<div class="Polaris-Layout__Section">
					<div class="Polaris-Card">
						<div class="Polaris-Card__Header">
							<h2 class="Polaris-Heading">App Setup Instructions</h2>
						</div>
						<div class="Polaris-Card__Section">
							<h3 aria-label="Reports" class="Polaris-Heading">How to set Cookie bar?</h3>
							<p>To set app bar,<a href="/home/setting"> CLICK HERE TO SET COOKIE BAR </a></p>
						</div>
						<div class="Polaris-Card__Section">
							<h3 aria-label="Summary" class="Polaris-Heading">The cookie bar is not showing on the storefront/site?</h3>
							<p> 1) You have to add following code to your <b>theme.liquid file</b>:&nbsp;&nbsp;<a href="#">&lt;script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'&gt;&lt;/script&gt;</a></p>
							 <p> 2) You must also set a cookie bar from our design section of the App and enable it.</p>
						</div>
						<div class="Polaris-Card__Section">
							<h3 aria-label="Reports" class="Polaris-Heading">How to set Cookies Group?</h3>
							<p>To set Cookie Group,<a href="/cookies_group"> CLICK HERE TO SET COOKIE GROUP </a></p>
						</div>
						<div class="Polaris-Card__Section">
							<h3 aria-label="Reports" class="Polaris-Heading">How to set Cookies?</h3>
							<p>To set Cookies,<a href="/cookies"> CLICK HERE TO SET COOKIES </a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

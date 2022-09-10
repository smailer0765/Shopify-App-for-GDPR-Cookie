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
						<h2>Settings</h2>
					</div>					
				</div>
				<div class="Polaris-Layout__Section">
					<div class="Polaris-Card">
						<div class="Polaris-Card__Header">
							<h2 class="Polaris-Heading">Enable GDPR Cookie</h2>
						</div>
						<div class="Polaris-Card__Section d-flex">
							<p>GDPR Cookie is enabled on your shop. Turn Off to disable this app</p>
							<label class="switch small ml-auto">
								<label class="Polaris-Choice Polaris-Choice--labelHidden"> 
									<span class="Polaris-Choice__Control">
										<span class="Polaris-Checkbox">
											<input id="bannerenable" type="checkbox" name="banner_enable" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="true" <?=( $row['enable_cookie'] == 1 )?"checked":"";?> value="1">
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
					<!--<form id="lang_form" style="float: left;width: 30%;">
						<div class="Polaris-Labelled__LabelWrapper">
							<div class="Polaris-Label">
								<label id="PolarisTextField8Label" for="PolarisTextField8" class="Polaris-Label__Text" style="font-weight: 700;font-size: 16px;">
									Popup Setting
								</label>
							</div>
						</div>
						<div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
							<div role="group" class="_1Dhaw _3heKI" aria-label="Language" style="max-width: 30rem;">
								<div class="_3SqeB">
									<input id="bar" type="radio" name="popup_setting" class="_3_Epi" value="bar" <?=( $setting_data['popup_setting'] == "bar" )?"checked":"";?>>
									<label for="bar" class="_1MOCg" style="text-align: center;">Basic Bar</label>
								</div>
								<div class="_3SqeB">
									<input id="popup" type="radio" name="popup_setting" class="_3_Epi" value="popup" <?=( $setting_data['popup_setting'] == "popup" )?"checked":"";?>><label for="popup" class="_1MOCg" style="text-align: center;">Basic Popup</label>
								</div>
							</div>
						</div>  
					</form> -->

					<!-- end popup bar setting -->
					<!-- layout setting -->
					<!--<div class="Polaris-Layout__Section basic_popup_setting" style="margin-top: 0px !important;"> 
						<div class="Polaris-FormLayout__Item basic_banner_part" style="margin-left: 0px !important;margin-top: 0px !important;"> 
							<span class="Polaris-TextStyle--variationStrong" style="font-size: 16px;font-weight: 700;">Alignment</span>
							<div class="alignment-box">
								<ul name="alignment_datass">
									<li class="record" value="3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Top Basic Popup">
										<a id="alignment_set" data-id="toppopup" value="" class="<?=($setting_data['alignment'] == "toppopup")?"align-active":"";?>">
											<svg xmlns="http://www.w3.org/2000/svg" width="18.1" height="14.301" viewBox="0 0 18.1 14.301">
											<defs>
											<style>
												.a {
													fill: #fff;
												}
											</style>
											</defs>
											<g transform="translate(18.1) rotate(90)">
												<g transform="translate(2.414 10.052)"><g transform="translate(0)"><path class="a" d="M11.432,4.236H.455A.457.457,0,0,1,0,3.78V.455A.457.457,0,0,1,.455,0H11.432a.457.457,0,0,1,.455.455V3.78A.457.457,0,0,1,11.432,4.236ZM10.977.865H.911V3.325H10.977Z"></path></g></g>
												<g transform="translate(2.414 3.858)"><g transform="translate(0)"><path class="a" d="M8.107,4.236H.455A.457.457,0,0,1,0,3.78V.455A.457.457,0,0,1,.455,0H8.107a.457.457,0,0,1,.455.455V3.78A.457.457,0,0,1,8.107,4.236Zm-.5-3.37H.911V3.325h6.7Z"></path></g></g>
												<g transform="translate(0)"><path class="a" d="M.455,18.1A.457.457,0,0,1,0,17.644V.455a.455.455,0,0,1,.911,0V17.644A.457.457,0,0,1,.455,18.1Z"></path></g>
											</g>
											</svg>
										</a>
									</li>
									<li class="record" value="1" data-toggle="tooltip" data-placement="left" title="" data-original-title="Left Basic PopUp">
										<a id="alignment_set" data-id="left" value="" class="<?=($setting_data['alignment'] == "left")?"align-active":"";?>">
											<svg xmlns="http://www.w3.org/2000/svg" width="14.301" height="18.1" viewBox="0 0 14.301 18.1">
											<defs>
											<style>
												.a {
													fill: #637381;
												}
											</style>
											</defs>
											<g transform="translate(-41.7)">
												<g transform="translate(44.114 3.812)"><g transform="translate(0)"><path class="a" d="M106.132,83.7H95.155a.457.457,0,0,0-.455.455V87.48a.457.457,0,0,0,.455.455h10.977a.457.457,0,0,0,.455-.455V84.155A.457.457,0,0,0,106.132,83.7Zm-.455,3.37H95.611V84.611h10.066Z" transform="translate(-94.7 -83.7)"></path></g></g>
												<g transform="translate(44.114 10.006)"><g transform="translate(0)"><path class="a" d="M102.807,219.7H95.155a.457.457,0,0,0-.455.455v3.325a.457.457,0,0,0,.455.455h7.652a.457.457,0,0,0,.455-.455v-3.325A.457.457,0,0,0,102.807,219.7Zm-.5,3.37h-6.7v-2.459h6.7Z" transform="translate(-94.7 -219.7)"></path></g></g>
												<g transform="translate(41.7)"><path class="a" d="M42.155,0A.457.457,0,0,0,41.7.455V17.645a.455.455,0,1,0,.911,0V.455A.457.457,0,0,0,42.155,0Z" transform="translate(-41.7)"></path></g>
											</g>
											</svg>
										</a>
									</li>
									<li class="record" value="4" data-toggle="tooltip" data-placement="center" title="" data-original-title="Middle Basic PopUp">
										<a id="alignment_set" data-id="center" value="" class="<?=($setting_data['alignment'] == "center")?"align-active":"";?>">
											<svg xmlns="http://www.w3.org/2000/svg" width="13.44" height="19.2" viewBox="0 0 13.44 19.2">
											<path id="center-align" class="a" d="M8.114,10.8H2.368V8.4h2.9a.442.442,0,0,0,.456-.427c0-.01,0-.021,0-.031V3.52a.474.474,0,0,0-.456-.5h-2.9V.48a.48.48,0,1,0-.96,0V3.024H-1.5a.474.474,0,0,0-.456.5V7.942a.442.442,0,0,0,.425.458H1.408v2.4H-4.338a.474.474,0,0,0-.494.458v4.865a.5.5,0,0,0,.494.485H1.408V18.72a.48.48,0,1,0,.96,0V16.608H8.114a.5.5,0,0,0,.495-.485V11.258A.474.474,0,0,0,8.114,10.8ZM-.992,3.984h5.76V7.44H-.992Zm8.64,11.664H-3.872V11.76H7.648Zm0,0" transform="translate(4.832)"></path> </svg></a>
									</li>
									<li class="record" value="4" data-toggle="tooltip" data-placement="right" title="" data-original-title="Right Basic PopUp">
										<a id="alignment_set" data-id="right" value="" class="<?=($setting_data['alignment'] == "right")?"align-active":"";?>">
											<svg xmlns="http://www.w3.org/2000/svg" width="14.301" height="18.1" viewBox="0 0 14.301 18.1">
											<defs>
											<style>
												.a {
													fill: #637381;
												}
											</style>
											</defs>
											<g transform="translate(0)">
												<g transform="translate(0 3.812)"><g transform="translate(0)"><path class="a" d="M95.155,83.7h10.976a.457.457,0,0,1,.455.455V87.48a.457.457,0,0,1-.455.455H95.155a.457.457,0,0,1-.455-.455V84.155A.457.457,0,0,1,95.155,83.7Zm.455,3.37h10.065V84.611H95.611Z" transform="translate(-94.7 -83.7)"></path></g></g>
												<g transform="translate(3.324 10.006)"><g transform="translate(0)"><path class="a" d="M95.155,219.7h7.651a.457.457,0,0,1,.455.455v3.325a.457.457,0,0,1-.455.455H95.155a.457.457,0,0,1-.455-.455v-3.325A.457.457,0,0,1,95.155,219.7Zm.5,3.37h6.695v-2.459H95.656Z" transform="translate(-94.7 -219.7)"></path></g></g>
												<g transform="translate(13.39 0)"><g transform="translate(0)"><path class="a" d="M42.155,0a.457.457,0,0,1,.455.455V17.645a.455.455,0,1,1-.911,0V.455A.457.457,0,0,1,42.155,0Z" transform="translate(-41.7)"></path></g></g>
											</g>
											</svg>
										</a>
									</li>
									<li class="record" value="2" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Bottom Basic Popup">
										<a id="alignment_set" data-id="bottompopup" value="" class="<?=($setting_data['alignment'] == "bottompopup" || $setting_data['alignment'] == "")?"align-active":"";?>">
											<svg xmlns="http://www.w3.org/2000/svg" width="18.1" height="14.301" viewBox="0 0 18.1 14.301">
											<defs>
											<style>
												.a {
													fill: #637381;
												}
											</style>
											</defs>
											<g transform="translate(0 56.001) rotate(-90)">
												<g transform="translate(44.114 3.812)"><g transform="translate(0)"><path class="a" d="M106.132,83.7H95.155a.457.457,0,0,0-.455.455V87.48a.457.457,0,0,0,.455.455h10.977a.457.457,0,0,0,.455-.455V84.155A.457.457,0,0,0,106.132,83.7Zm-.455,3.37H95.611V84.611h10.066Z" transform="translate(-94.7 -83.7)"></path></g></g>
												<g transform="translate(44.114 10.006)"><g transform="translate(0)"><path class="a" d="M102.807,219.7H95.155a.457.457,0,0,0-.455.455v3.325a.457.457,0,0,0,.455.455h7.652a.457.457,0,0,0,.455-.455v-3.325A.457.457,0,0,0,102.807,219.7Zm-.5,3.37h-6.7v-2.459h6.7Z" transform="translate(-94.7 -219.7)"></path></g></g>
												<g transform="translate(41.7)"><path class="a" d="M42.155,0A.457.457,0,0,0,41.7.455V17.645a.455.455,0,1,0,.911,0V.455A.457.457,0,0,0,42.155,0Z" transform="translate(-41.7)"></path></g>
											</g>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>-->
				</div>
				
				<div class="Polaris-Layout__Section">
					<div class="Polaris-Card">
						<div>
							<div class="Polaris-Tabs__Wrapper">
								<ul role="tablist" class="Polaris-Tabs">
									<li class="Polaris-Tabs__TabContainer all-customers-content productcolor">
										<button id="all-customers" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab Polaris-Tabs__Tab--selected" aria-selected="true" aria-controls="all-customers-content" aria-label="All customers" >
											<span class="Polaris-Tabs__Title general_setting">General</span>
										</button>
									</li>
									<!--<li class="Polaris-Tabs__TabContainer accepts-marketing-content productcolor">
										<button id="accepts-marketing" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false" aria-controls="accepts-marketing-content">
											<span class="Polaris-Tabs__Title display_setting">What to display</span>
										</button>
									</li>
									<li class="Polaris-Tabs__TabContainer advanced">
										<button id="accepts-marketing" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab main-tab advanced" aria-selected="false" aria-controls="advance-marketing-content">
											<span class="Polaris-Tabs__Title advance_setting_text">Advanced</span>
										</button>
									</li>-->
								</ul>
							</div>
							
							<div class="Polaris-Tabs__Panel" id="all-customers-content" role="tabpanel" aria-labelledby="all-customers" tabindex="-1">
								<form method="POST" id="bannerForm1" action="<?=base_url()?>home/insert_first_setting">
									<div class="Polaris-Card__Section">
										<div class="Polaris-FormLayout">
											<!--<div class="Polaris-FormLayout__Item form-md-line-input has-success">
												<input type="hidden" name="popup_setting" value="popup" class="popup_setting">
												<input type="hidden" name="popup_alignment" value="bottompopup" class="popup_alignment">
												<p>Show only in Europe
													<label class="switch small ml-auto">
														<label class="Polaris-Choice Polaris-Choice--labelHidden"> 
															<span class="Polaris-Choice__Control">
																<span class="Polaris-Checkbox">
																	<input id="checkboxdeny" type="checkbox" name="showOnlyInEurope" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="true" value="1" <?=($setting_data['in_europe'] == 1)?"checked":"";?>>
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
															<span class="Polaris-Choice__Label">stt</span> 
														</label>
													</label>
												</p>
											</div>-->
											<div class="Polaris-FormLayout__Item form-md-line-input has-success">
												<div class="Polaris-Labelled__LabelWrapper">
													<div class="Polaris-Label">
														<label id="PolarisTextField8Label" for="PolarisTextField8" class="Polaris-Label__Text">Message</label>
													</div>
												</div>
												<div class="Polaris-Connected">
													<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
														<div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
															<textarea id="title_content" name="message" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField8Label" data-emojiable="converted" aria-invalid="false" aria-multiline="true" style="height: 73px;" data-id="40727f26-79d3-42e8-8756-b80ea8ea2870" data-type="original-input"><?=$setting_data['message'];?></textarea>
															<div class="Polaris-TextField__Backdrop"></div>
															<div aria-hidden="true" class="Polaris-TextField__Resizer">
																<div class="Polaris-TextField__DummyInput"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="Polaris-FormLayout__Item">
												<div class="Polaris-Labelled__LabelWrapper">
													<div class="Polaris-Label">
														<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Allow Button Text</label>
													</div>
												</div>
												<div class="Polaris-Connected">
													<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
														<div class="Polaris-TextField Polaris-TextField--hasValue">
															<input id="policybuttontext" name="ok_btn_txt" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="<?=$setting_data['allow_button_text'];?>">
															<div class="Polaris-TextField__Backdrop"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="Polaris-FormLayout__Item">
												<div class="Polaris-Labelled__LabelWrapper">
													<div class="Polaris-Label">
														<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Link Name</label>
													</div>
												</div>
												<div class="Polaris-Connected">
													<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
														<div class="Polaris-TextField Polaris-TextField--hasValue">
															<input id="deny_link_name" name="deny_link_text" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="<?=$setting_data['cookie_policy_text'];?>">
															<div class="Polaris-TextField__Backdrop"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="Polaris-FormLayout__Item">
												<div class="Polaris-Labelled__LabelWrapper">
													<div class="Polaris-Label">
														<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Privacy Policy URL</label>
													</div>
												</div>
												<div class="Polaris-Connected">
													<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
														<div class="Polaris-TextField Polaris-TextField--hasValue">
															<input id="privacy_url_texts" name="privacy_policy_url" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="<?=$setting_data['privacy_policy_url'];?>">
															<div class="Polaris-TextField__Backdrop"></div>
														</div>
													</div>
												</div>
											</div>
											<!--  check advance lay out type -->
											<div class="Polaris-FormLayout__Item">
												<div class="Polaris-Labelled__LabelWrapper">
													<div class="Polaris-Label">
														<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Deny Button Text</label>
													</div>
												</div>
												<div class="Polaris-Connected">
													<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
														<div class="Polaris-TextField Polaris-TextField--hasValue">
															<input id="link_name" name="info_link_text" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="<?=$setting_data['deny_button_text'];?>">
															<div class="Polaris-TextField__Backdrop"></div>
														</div>
													</div>
												</div>
											</div>
											<!--<div class="Polaris-FormLayout__Item">
												<div class="Polaris-Labelled__LabelWrapper">
													<div class="Polaris-Label">
														<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Deny Button URL</label>
													</div>
												</div>
												<div class="Polaris-Connected">
													<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
														<div class="Polaris-TextField Polaris-TextField--hasValue">
															<input id="decline_url_text" name="decline_url_text" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="<?=$setting_data['deny_button_url'];?>">
															<div class="Polaris-TextField__Backdrop"></div>
														</div>
													</div>
												</div>
											</div>-->
											<div class="Polaris-FormLayout__Item">
												<div class="Polaris-Labelled__LabelWrapper">
													<div class="Polaris-Label">
														<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Setting Button Text</label>
													</div>
												</div>
												<div class="Polaris-Connected">
													<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
														<div class="Polaris-TextField Polaris-TextField--hasValue">
															<input id="setting_name" name="setting_link_text" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="<?=$setting_data['setting_link_text'];?>">
															<div class="Polaris-TextField__Backdrop"></div>
														</div>
													</div>
												</div>
											</div>
											<!-- end check data -->
										</div>
									</div>
									<div class="Polaris-Card__Section text-right">
										<button type="submit" class="Polaris-Button Polaris-Button--primary"> 
											<span class="Polaris-Button__Content">
												<span class="Polaris-Button__Text">Save</span>
											</span>
										</button>
									</div>
								</form>
							</div>
							
							<!--<div class="Polaris-Tabs__Panel Polaris-Tabs__Panel--hidden" id="accepts-marketing-content" role="tabpanel" aria-labelledby="accepts-marketing" tabindex="-1">
								<form method="POST" id="bannerForm2" action="<?=base_url()?>home/insert_layouts_setting">
									<div class="Polaris-Card__Section">
										<div class="Polaris-Card">
											<div class="Polaris-Card__Section">
												<input type="hidden" name="popup_setting" value="popup" class="popup_setting">
												<input type="hidden" name="popup_alignment" value="bottompopup" class="popup_alignment">
												<div class="Polaris-FormLayout">
													<div class="Polaris-FormLayout__Item">                      
														<div class="Polaris-Labelled__LabelWrapper">
															<div class="Polaris-Label">
																<label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">
																	<h2 class="Polaris-Heading">Select The Layout Type</h2>
																</label>
															</div>
														</div>
														<div class="Polaris-Select" style="height: 35px;">
															<select id="banner_layout" required="required" name="banner_layout" class="Polaris-Select__Input" aria-invalid="false">
																<option value="basic" <?=($layout_data['layout_type']=="basic")?"selected":"";?> >Basic</option>
																<option value="advance" <?=($layout_data['layout_type']=="advance")?"selected":"";?> class="advance_option">Advance</option>
															</select>
															<div class="Polaris-Select__Backdrop"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="Polaris-Card basic_banner_part1">
											<div class="Polaris-Card__Section">
												<div class="Polaris-Card__SectionHeader">
													<h2 class="Polaris-Heading">Banner Settings</h2> 
												</div>
												<div class="Polaris-FormLayout">
													<div class="Polaris-FormLayout__Items big50">
														<div class="Polaris-FormLayout__Item">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">Font Size</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="banner_font_size" class="Polaris-TextField__Input" name="banner_font_size" type="number" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?=$layout_data['banner_font_size'];?>">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item d-flex ai-btm">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Font Color</label>
																</div>
															</div>
															<div class="Polaris-Connected ml-20">
																<div id="banner_font_color" class="color-picker colorpicker-element">
																	<img style="min-width:16px;min-height:16px;box-sizing:unset;box-shadow:none;background:unset;padding:0 6px 0 0;cursor:pointer;" src="chrome-extension://ohcpnigalekghcmgcdcenkpelffpdolg/img/icon16.png" title="Select with ColorPick Eyedropper - See advanced option: &quot;Add ColorPick Eyedropper near input[type=color] fields on websites&quot;" class="colorpick-eyedropper-input-trigger"><input type="color" id="favcolor" name="banner_font_color" value="<?=$layout_data['banner_font_color'];?>" colorpick-eyedropper-active="true"> 
																</div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item d-flex ai-btm">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Background</label>
																</div>
															</div>
															<div class="Polaris-Connected ml-20">
																<div id="box_back" class="color-picker colorpicker-element">
																	<img style="min-width:16px;min-height:16px;box-sizing:unset;box-shadow:none;background:unset;padding:0 6px 0 0;cursor:pointer;" src="chrome-extension://ohcpnigalekghcmgcdcenkpelffpdolg/img/icon16.png" title="Select with ColorPick Eyedropper - See advanced option: &quot;Add ColorPick Eyedropper near input[type=color] fields on websites&quot;" class="colorpick-eyedropper-input-trigger"><input type="color" id="favcolor" name="banner_back_color" value="<?=$layout_data['banner_background_color'];?>" colorpick-eyedropper-active="true"> 
																</div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item change_banner_height">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">Banner Height</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="banner_height" class="Polaris-TextField__Input" name="banner_height" type="number" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?=$layout_data['banner_height'];?>">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="Polaris-Card basic_banner_part1">
											<div class="Polaris-Card__Section">
												<div class="Polaris-Card__SectionHeader">
													<h2 class="Polaris-Heading">Link Settings</h2> 
												</div>
												<div class="Polaris-FormLayout">
													<div class="Polaris-FormLayout__Items ">
														<div class="Polaris-FormLayout__Item">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">Font Size</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="link_font_size" name="link_font_size" class="Polaris-TextField__Input" type="number" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?=$layout_data['link_font_size'];?>">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
															<div class="Polaris-FormLayout__Item d-flex ai-btm">
																<div class="Polaris-Labelled__LabelWrapper">
																	<div class="Polaris-Label">
																		<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Font Color</label>
																	</div>
																</div>
																<div class="Polaris-Connected ml-20">
																	<div class="color-picker">
																		<img style="min-width:16px;min-height:16px;box-sizing:unset;box-shadow:none;background:unset;padding:0 6px 0 0;cursor:pointer;" src="chrome-extension://ohcpnigalekghcmgcdcenkpelffpdolg/img/icon16.png" title="Select with ColorPick Eyedropper - See advanced option: &quot;Add ColorPick Eyedropper near input[type=color] fields on websites&quot;" class="colorpick-eyedropper-input-trigger"><input type="color" id="link_font_color" name="link_font_color" value="<?=$layout_data['link_font_color'];?>" class="colorpicker-element" colorpick-eyedropper-active="true"> 
																	</div>
																</div>
															</div>
													</div>
												</div>
											</div>
										</div>
										<div class="Polaris-Card basic_banner_part1">
											<div class="Polaris-Card__Section">
												<div class="Polaris-Card__SectionHeader">
													<h2 class="Polaris-Heading">Deny Button Settings</h2> 
												</div>
												<div class="Polaris-FormLayout">
													<div class="Polaris-FormLayout__Items big50">
														<div class="Polaris-FormLayout__Item">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">Font Size</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="decline_link_font_size" name="decline_link_font_size" class="Polaris-TextField__Input" type="number" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?=$layout_data['deny_font_size'];?>">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item d-flex ai-btm">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Font Color</label>
																</div>
															</div>
															<div class="Polaris-Connected ml-20">
																<div class="color-picker">
																	<img style="min-width:16px;min-height:16px;box-sizing:unset;box-shadow:none;background:unset;padding:0 6px 0 0;cursor:pointer;" src="chrome-extension://ohcpnigalekghcmgcdcenkpelffpdolg/img/icon16.png" title="Select with ColorPick Eyedropper - See advanced option: &quot;Add ColorPick Eyedropper near input[type=color] fields on websites&quot;" class="colorpick-eyedropper-input-trigger"><input type="color" id="decline_link_font_color" name="decline_link_font_color" value="<?=$layout_data['deny_font_color'];?>" class="colorpicker-element" colorpick-eyedropper-active="true"> </div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item d-flex ai-btm">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Enable Deny Option</label>
																</div>
															</div>
															<label class="switch small ml-20">
																<label class="Polaris-Choice Polaris-Choice--labelHidden"> 
																	<span class="Polaris-Choice__Control">
																		<span class="Polaris-Checkbox">
																			<input id="checkboxdenys" type="checkbox" name="deny_enable" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="true" value="1" <?=($layout_data['enable_deny']=="1")?"checked":"";?> >
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
																	<span class="Polaris-Choice__Label">stt</span> 
																</label>
															</label>
														</div>
														<div class="Polaris-FormLayout__Item d-flex ai-btm">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label" style="margin-right: 20px ;">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Hide Banner on click of deny Button</label>
																</div>
															</div>
														  <label class="switch small" style="margin-right: 30px;">
															  <label class="Polaris-Choice Polaris-Choice--labelHidden">
																  <span class="Polaris-Choice__Control">
																	  <span class="Polaris-Checkbox">
																		  <input id="" type="checkbox" name="hideonclickdeny" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="true" value="1" <?=($layout_data['hide_banner']=="1")?"checked":"";?> >
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
																  <span class="Polaris-Choice__Label">stt</span>
															  </label>
														  </label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="Polaris-Card basic_banner_part1" id="basicdesign">
											<div class="Polaris-Card__Section">
												<div class="Polaris-Card__SectionHeader">
													<h2 class="Polaris-Heading">Button Settings</h2> 
												</div>
												<div class="Polaris-FormLayout">
													<div class="Polaris-FormLayout__Items big50">
														<div class="Polaris-FormLayout__Item">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">Font Size</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="button_font_size" name="button_font_size" class="Polaris-TextField__Input" type="number" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?=$layout_data['button_font_size'];?>">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item d-flex ai-btm">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Font Color</label>
																</div>
															</div>
															<div class="Polaris-Connected ml-20">
																<div class="color-picker">
																	<img style="min-width:16px;min-height:16px;box-sizing:unset;box-shadow:none;background:unset;padding:0 6px 0 0;cursor:pointer;" src="chrome-extension://ohcpnigalekghcmgcdcenkpelffpdolg/img/icon16.png" title="Select with ColorPick Eyedropper - See advanced option: &quot;Add ColorPick Eyedropper near input[type=color] fields on websites&quot;" class="colorpick-eyedropper-input-trigger"><input type="color" id="button_font_color" name="button_font_color" value="<?=$layout_data['button_font_color'];?>" class="colorpicker-element" colorpick-eyedropper-active="true"> </div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item d-flex ai-btm">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Background</label>
																</div>
															</div>
															<div class="Polaris-Connected ml-20">
																<div class="color-picker">
																	<img style="min-width:16px;min-height:16px;box-sizing:unset;box-shadow:none;background:unset;padding:0 6px 0 0;cursor:pointer;" src="chrome-extension://ohcpnigalekghcmgcdcenkpelffpdolg/img/icon16.png" title="Select with ColorPick Eyedropper - See advanced option: &quot;Add ColorPick Eyedropper near input[type=color] fields on websites&quot;" class="colorpick-eyedropper-input-trigger">
																	<input type="color" id="button_back_color" name="button_back_color" value="<?=$layout_data['button_background_color'];?>" class="colorpicker-element" colorpick-eyedropper-active="true"> 
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="Polaris-Card basic_banner_part1">
											<div class="Polaris-Card__Section">
												<div class="Polaris-Card__SectionHeader">
													<h2 class="Polaris-Heading">Filter Option Button Settings</h2> 
												</div>
												<div class="Polaris-FormLayout">
													<div class="Polaris-FormLayout__Items big50">
														<div class="Polaris-FormLayout__Item">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">Font Size</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="cookie_font_size" name="cookie_font_size" class="Polaris-TextField__Input" type="number" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?=$layout_data['option_button_font_size'];?>">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item d-flex ai-btm">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Font Color</label>
																</div>
															</div>
															<div class="Polaris-Connected ml-20">
																<div class="color-picker">
																	<img style="min-width:16px;min-height:16px;box-sizing:unset;box-shadow:none;background:unset;padding:0 6px 0 0;cursor:pointer;" src="chrome-extension://ohcpnigalekghcmgcdcenkpelffpdolg/img/icon16.png" title="Select with ColorPick Eyedropper - See advanced option: &quot;Add ColorPick Eyedropper near input[type=color] fields on websites&quot;" class="colorpick-eyedropper-input-trigger"><input type="color" id="cookie_fontcolor" name="cookie_fontcolor" value="<?=$layout_data['option_button_font_color'];?>" class="colorpicker-element" colorpick-eyedropper-active="true"> 
																</div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item d-flex ai-btm">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Background</label>
																</div>
															</div>
															<div class="Polaris-Connected ml-20">
																<div class="color-picker">
																	<img style="min-width:16px;min-height:16px;box-sizing:unset;box-shadow:none;background:unset;padding:0 6px 0 0;cursor:pointer;" src="chrome-extension://ohcpnigalekghcmgcdcenkpelffpdolg/img/icon16.png" title="Select with ColorPick Eyedropper - See advanced option: &quot;Add ColorPick Eyedropper near input[type=color] fields on websites&quot;" class="colorpick-eyedropper-input-trigger"><input type="color" id="cookie_button_back_color" name="cookie_button_back_color" value="<?=$layout_data['option_button_background_color'];?>" colorpick-eyedropper-active="true"> 
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="Polaris-Card basic_banner_part1">
											<div class="Polaris-Card__Section">
												<div class="Polaris-Card__SectionHeader">
													<h2 class="Polaris-Heading">Expiration Time ( In a Days )</h2> </div>
												<div class="Polaris-FormLayout">
													<div class="Polaris-FormLayout__Items big50">
														<div class="Polaris-FormLayout__Item">
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="iCookieExpireTime" name="iCookieExpireTime" class="Polaris-TextField__Input" type="number" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="<?=$layout_data['expiration_time'];?>">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>                                           
										<div class="Polaris-Card__Section text-right basic_banner_part1">
											<button type="submit" class="Polaris-Button Polaris-Button--primary"> 
												<span class="Polaris-Button__Content">
													<span class="Polaris-Button__Text">Save</span> 
												</span>
											</button>
										</div>
									</div>
								</form>
							</div>-->
							
							<!--<div class="Polaris-Tabs__Panel main-tab-panel advance_option_tag Polaris-Tabs__Panel--hidden" id="advance-marketing-content" role="tabpanel" aria-labelledby="accepts-marketing" tabindex="-1" >
								<form method="POST" id="customecsspage" action="<?=base_url()?>home/advance_cookies_setting" style="">
									<div class="Polaris-Card advance_faq_section">
										<div>
											<div class="Polaris-Tabs__Wrapper">
												<ul role="tablist" class="Polaris-Tabs">
													<li class="Polaris-Tabs__TabContainer option-setting Polaris-Tabs__Tab--selected">
														<button id="all-customers" role="tab" type="button" tabindex="0" class="Polaris-Tabs__Tab child-tab option-setting" aria-selected="false" aria-controls="option-setting" aria-label="All customers">
															<span class="Polaris-Tabs__Title">Advance Filter Option</span> 
														</button>
													</li>
												</ul>
											</div>
											<div class=" child-tab option-setting" id="option-setting" aria-labelledby="option-setting" tabindex="-1" aria-selected="false">
												<div class="Polaris-Card__Section">
													<div class="Polaris-FormLayout">
														<div class="Polaris-FormLayout__Item notification_note">
															<div class="Polaris-Labelled__LabelWrapper" style="margin-top: 10px;">
																<div class="Polaris-Label">
																	<label id="PolarisTextField1Label" for="PolarisTextField6" class="Polaris-Label__Text">Strict Cookie Title</label>
																</div>
															</div>
															<div class="Polaris-Connected" style="margin-bottom: 10px;">
															   <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="PolarisTextField1" name="strictly_cookies" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField6Label" aria-invalid="false" value="<?=$advance_data['cookie_title_1']?>" aria-multiline="false">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
													   <div class="Polaris-FormLayout__Item notification_note">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Description</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
																		<textarea id="PolarisTextField4" name="strictly_cookies_ans" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="true" style="height: 68px;"><?=$advance_data['cookie_descrption_1']?></textarea>
																		<div class="Polaris-TextField__Backdrop"></div>
																		<div aria-hidden="true" class="Polaris-TextField__Resizer">
																			<div class="Polaris-TextField__DummyInput"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="Polaris-Card__Section">
													<div class="Polaris-FormLayout">
														  <div class="Polaris-FormLayout__Item notification_note">
															<div class="Polaris-Labelled__LabelWrapper" style="margin-top: 10px;">
																<div class="Polaris-Label">
																	<label id="PolarisTextField1Label" for="PolarisTextField6" class="Polaris-Label__Text">Interactions Cookie Title</label>
																</div>
															</div>
															<div class="Polaris-Connected" style="margin-bottom: 10px;">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="PolarisTextField1" name="basic_cookies" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField6Label" aria-invalid="false" aria-multiline="false" value="<?=$advance_data['cookie_title_2']?>">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
													  <div class="Polaris-FormLayout__Item notification_note">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Description</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
																		<textarea id="PolarisTextField4" name="basic_cookies_ans" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="true" style="height: 68px;"><?=$advance_data['cookie_descrption_2']?></textarea>
																		<div class="Polaris-TextField__Backdrop"></div>
																		<div aria-hidden="true" class="Polaris-TextField__Resizer">
																			<div class="Polaris-TextField__DummyInput"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="Polaris-Card__Section">
													<div class="Polaris-FormLayout">
														  <div class="Polaris-FormLayout__Item notification_note">
															<div class="Polaris-Labelled__LabelWrapper" style="margin-top: 10px;">
																<div class="Polaris-Label">
																	<label id="PolarisTextField1Label" for="PolarisTextField6" class="Polaris-Label__Text">Measurements Cookie Title</label>
																</div>
															</div>
															<div class="Polaris-Connected" style="margin-bottom: 10px;">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="PolarisTextField1" name="experience_cookies" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField6Label" aria-invalid="false" aria-multiline="false" value="<?=$advance_data['cookie_title_3']?>">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
														 <div class="Polaris-FormLayout__Item notification_note">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Description</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
																		<textarea id="PolarisTextField4" name="experience_cookies_ans" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="true" style="height: 68px;"><?=$advance_data['cookie_descrption_3']?></textarea>
																		<div class="Polaris-TextField__Backdrop"></div>
																		<div aria-hidden="true" class="Polaris-TextField__Resizer">
																			<div class="Polaris-TextField__DummyInput"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="Polaris-Card__Section">
													<div class="Polaris-FormLayout">
														 <div class="Polaris-FormLayout__Item notification_note">
															<div class="Polaris-Labelled__LabelWrapper" style="margin-top: 10px;">
																<div class="Polaris-Label">
																	<label id="PolarisTextField1Label" for="PolarisTextField6" class="Polaris-Label__Text">Targeting &amp; Advertising Cookie Title</label>
																</div>
															</div>
															<div class="Polaris-Connected" style="margin-bottom: 10px;">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="PolarisTextField1" name="measurement_cookies" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField6Label" aria-invalid="false" aria-multiline="false" value="<?=$advance_data['cookie_title_4']?>">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
														 <div class="Polaris-FormLayout__Item notification_note">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Description</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
																		<textarea id="PolarisTextField4" name="measurement_cookies_ans" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="true" style="height: 68px;"><?=$advance_data['cookie_descrption_4']?></textarea>
																		<div class="Polaris-TextField__Backdrop"></div>
																		<div aria-hidden="true" class="Polaris-TextField__Resizer">
																			<div class="Polaris-TextField__DummyInput"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="Polaris-Card__Section">
													<div class="Polaris-FormLayout">
														<div class="Polaris-Card__Header">
															<h2 class="Polaris-Heading" style="margin-left:-4px">Custom Settings</h2> 
														</div>
														<div class="Polaris-FormLayout__Item notification_note">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Custom CSS</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
																		<textarea id="PolarisTextField4" name="csscode" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="true" placeholder="Your custom CSS here..." style="height: 212px;"><?=$advance_data['custom_css']?></textarea>
																		<div class="Polaris-TextField__Backdrop"></div>
																		<div aria-hidden="true" class="Polaris-TextField__Resizer">
																			<div class="Polaris-TextField__DummyInput"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item notification_note">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Custom Javascript</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
																		<textarea id="PolarisTextField4" name="jscode" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="true" placeholder="Your custom Javascript here..." style="height: 212px;"><?=$advance_data['custom_js']?></textarea>
																		<div class="Polaris-TextField__Backdrop"></div>
																		<div aria-hidden="true" class="Polaris-TextField__Resizer">
																			<div class="Polaris-TextField__DummyInput"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="Polaris-Tabs__Panel Polaris-Tabs__Panel--hidden child-tab-panel" id="filter-option" role="tabpanel" aria-labelledby="filter-option" tabindex="-1">
												<div class="Polaris-Card__Section">
													<div class="Polaris-FormLayout">
														<div class="Polaris-FormLayout__Item">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField1Label" for="PolarisTextField6" class="Polaris-Label__Text">Name<span class="fa fa-info-circle" data-toggle="tooltip" data-original-title="Share" style="margin-left: 5px;"></span>
																	</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue">
																		<input id="PolarisTextField1" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField6Label" aria-invalid="false" aria-multiline="false" value="">
																		<div class="Polaris-TextField__Backdrop"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item">
															<div class="Polaris-Labelled__LabelWrapper">
																<div class="Polaris-Label">
																	<label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Description</label>
																</div>
															</div>
															<div class="Polaris-Connected">
																<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
																	<div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">
																		<textarea id="PolarisTextField4" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="true" style="height: 68px;"></textarea>
																		<div class="Polaris-TextField__Backdrop"></div>
																		<div aria-hidden="true" class="Polaris-TextField__Resizer">
																			<div class="Polaris-TextField__DummyInput"></div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="Polaris-FormLayout__Item text-right">
															<button type="button" class="Polaris-Button add_row">
																<span class="Polaris-Button__Content">
																	<span class="Polaris-Button__Text add_row">Add New</span>
																</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="Polaris-Card__Section text-right">
										<button type="submit" class="Polaris-Button Polaris-Button--primary">
											<span class="Polaris-Button__Content">
												<span class="Polaris-Button__Text">Save</span>
											</span>
										</button>
									</div>
								</form>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
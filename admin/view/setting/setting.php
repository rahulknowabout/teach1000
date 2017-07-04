<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="ckeditor/samples/css/samples.css">
<link rel="stylesheet" href="ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<?php $rows = admin_setting(); 
       //echo "<pre>";
	   //print_r( $rows );
	   //die();
?>


<div class="clearfix"></div>

                    <div class="">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Basic Setting</a>
                                                </li>
                                                <li><a href="#">Mail Setting</a>
                                                </li>
												<li><a href="#">Payment Setting</a>
                                                </li>
												<li><a href="#">Message Setting</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">


                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Basic Setting</a>
                                            </li>
											
                                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab"  aria-expanded="false">Mail Setting</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Payment Setting</a>
                                            </li>
											
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                              <form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="index.php?f=setting&t=basicsetting&act=act" enctype="multipart/form-data">
                         <hr/>
						 <h4>Profile Setting</h4>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">User Name</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								   
                       <input type="text" class="form-control" placeholder="Enter ..." name="user_name" value="<?php  echo $rows['0']['name']; ?>"  required/>
							</div>
						</div>
	                <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								   
                       <input type="text" class="form-control" placeholder="Enter ..." name="user_password" value="<?php echo $rows['0']['password']; ?>"  required/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								   
                       <input type="text" class="form-control" placeholder="Enter ..." name="user_email" value="<?php  echo $rows['0']['email']; ?>"  required/>
							</div>
						</div>
						<hr/>
						<h4> Contact Setting</h4>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								   
                       <input type="text" class="form-control" placeholder="Enter ..." name="user_address" value="<?php  echo $rows['0']['address']; ?>"  />
							</div>
						</div> 
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Phone</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								   
                       <input type="text" class="form-control" placeholder="Enter ..." name="user_phone" value="<?php echo $rows['0']['phone']; ?>"  re/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Fax</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								   
                       <input type="text" class="form-control" placeholder="Enter ..." name="user_fax" value="<?php  echo $rows['0']['fax']; ?>"  />
							</div>
							
						</div>
						
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								   
                       <input type="text" class="form-control" placeholder="Enter ..." name="f_link" value="<?php  echo $rows['0']['flink']; ?>"  requ/>
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Google+</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								   
                       <input type="text" class="form-control" placeholder="Enter ..." name="g_link" value="<?php  echo $rows['0']['glink']; ?>"  requ/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Twitter</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								   
                       <input type="text" class="form-control" placeholder="Enter ..." name="t_link" value="<?php  echo $rows['0']['tlink']; ?>"  requ/>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">LinkedIn</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								   
                       <input type="text" class="form-control" placeholder="Enter ..." name="lin_link" value="<?php  echo $rows['0']['lin_link']; ?>"  />
							</div>
						</div>
						
						
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="reset" class="btn btn-primary">Reset</button>
								<button type="submit" class="btn btn-success xcxc">Submit</button>
							</div>
						</div>
                                 </form>           
				</div>
				<?php
				$rown = select_mailsetting(1);
				$rowc = select_mailsetting(2);
				$rowr = select_mailsetting(3);
				$rowra = select_mailsetting(4);
				 ?>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                   
												    <form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="index.php?f=setting&t=mailsetting&act=act" enctype="multipart/form-data">    
													
								                      <h4>  Variable For Use </h4> 
												
														$name :- User name 
														<br/>
														$email:-User Email
														<hr/>
							                        <h4>Revert Mail Tamplate For NewsLetter </h4>
													
													<div class="form-group">
														
														<div class="col-md-9 col-sm-9 col-xs-12">
								                            	
                       									<input type="text" class="form-control" placeholder="Email Subject" name="nemail_sub" value="<?php echo $rown['0']['mail_subject']; ?>"  required/>
													   </div>
												  </div>
												
						                             <div class="form-group">
							                             	
							                             <div class="col-md-9 col-sm-9 col-xs-12">
															<textarea name="r_newsletter" class="ckeditor"><?php   echo $rown['0']['mail_format'];?></textarea>
															
														</div>
													</div>
												<h4> 
												Revert Mail Tamplate For Contact Us 
												</h4>	 
													 <div class="form-group">
														
														<div class="col-md-9 col-sm-9 col-xs-12">
								                            	
                       									<input type="text" class="form-control" placeholder="Email Subject" name="cemail_sub" value="<?php  echo $rowc['0']['mail_subject']; ?>"  required/>
													   </div>
												  </div>
												  
												  <div class="form-group">
							                             	
							                             <div class="col-md-9 col-sm-9 col-xs-12">
															<textarea name="r_contact" class="ckeditor"><?php   echo $rowc['0']['mail_format']; ?></textarea>
															
														</div>
													</div>
													<h4>Revert Mail Tamplate For Registration On time</h4>
													<div class="form-group">
														
														<div class="col-md-9 col-sm-9 col-xs-12">
								                            	
                       									<input type="text" class="form-control" placeholder="Email Subject" name="remail_sub" value="<?php echo $rowr['0']['mail_subject']; ?>"  required/>
													   </div>
												  </div>
												  <div class="form-group">
							                             	
							                             <div class="col-md-9 col-sm-9 col-xs-12">
															<textarea name="r_registration" class="ckeditor"><?php  echo $rowr['0']['mail_format'];  ?></textarea>
															
														</div>
													</div>
													
												 <h4> Revert Mail Tamplate For After Registration </h4>
												<div class="form-group">
														
														<div class="col-md-9 col-sm-9 col-xs-12">
								                            	
                       									<input type="text" class="form-control" placeholder="Email Subject" name="raemail_sub" value="<?php  echo $rowra['0']['mail_subject']; ?>"  required/>
													   </div>
												  </div> 
												  <div class="form-group">
							                             	
							                             <div class="col-md-9 col-sm-9 col-xs-12">
															<textarea name="r_registrationa" class="ckeditor"><?php  echo $rowra['0']['mail_format'];  ?></textarea>
															
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
															<button type="reset" class="btn btn-primary">Reset</button>
															<button type="submit" class="btn btn-success xcxc">Submit</button>
														</div>
													</div>
												</form>	
                                            </div>
                                      <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                               <!-- payment setting -->
								<?php $rowps = select_paymentsetting(1);     
								
								       $rowrm = select_mailsetting(5);
								
								?>				


					<form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="index.php?f=setting&t=paymentsetting&act=act" enctype="multipart/form-data">
					
					<div class="form-group">
							<label  for="first-name">Currency Code:- <span class="required">*</span>
							</label>
							<div >
								<input type="text" name = "currency_code" value="<?php echo $rowps['0']['currency_code']; ?>"  required="required" placeholder="currency" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						
                       	<div class="form-group">
							<label>Payment Mode:-<span class="required">*</span></label>
							<div>
								<select class="form-control" name="mode">
									<option value="1"<?php   if ( $rowps['0']['mode'] == 1) {  echo "selected='selected'"; } ?>>
										Test Mode
									</option>
                     				<option value="0"<?php if ( $rowps['0']['mode'] == 0) {  echo "selected='selected'";  }?>>
										Real Mode
									</option>
								</select>
							</div>
						</div>
						
					    <hr/>
						<h4>Thank You Mail Tamplate For Payment Confirmed </h4>
						
						<div class="form-group">
														
							<div class="col-md-9 col-sm-9 col-xs-12">
								                   	
                       			<input type="text" class="form-control" placeholder="Email Subject" name="payment_sub_revert" value="<?php echo  $rowrm['0']['mail_subject'] ?>"  required/>
							 </div>
			 			</div>
						
						<div class="form-group">
						
							<div class="col-md-9 col-sm-9 col-xs-12">
								<textarea name="payment_mail" class="ckeditor"><?php echo  $rowrm['0']['mail_format']; ?></textarea>
							</div>
						</div>
						
						
						
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="reset" class="btn btn-primary">Reset</button>
								<button type="submit" class="btn btn-success xcxc">Submit</button>
							</div>
						</div>
						
						<input type="hidden" name="aid" value="<?php //if( isset( $_GET['aid']) && isset($_GET['aid']) ){ echo $_REQUEST['aid']; } ?>" name="edit" />
					</form>
					</div>
					            
								 
				
<?php
	$buildurl = buildurl("admin/browse.php");
?>
<script>
CKEDITOR.replace( 'payment_mail', {
    filebrowserBrowseUrl: './browser/browse.php',
    filebrowserUploadUrl: './index.php?onlyupload=y'
});
var editor = CKEDITOR.replace( 'editor1' );
CKFinder.setupCKEditor( editor, '/images/' );
</script>
 					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
CKEDITOR.replace( 'r_newsletter', {
    filebrowserBrowseUrl: './browser/browse.php',
    filebrowserUploadUrl: './index.php?onlyupload=y'
});
var editor = CKEDITOR.replace( 'r_contact' );
var editor = CKEDITOR.replace( 'r_registration' );
var editor = CKEDITOR.replace( 'r_registrationa' );

CKFinder.setupCKEditor( editor, '/images/' );
</script>
<div class="col-md-8 single_right">
	 	   <div class="login-form-section">
                <div class="login-content">
                    <form role="form"  method="post" action="<?=base_url().'login_user/validate_reset_pw'?>" enctype="multipart/form-data">
                        <div class="section-title">
                            <h3>Reset Your Password</h3>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" name="password" id="password" class="form-control"  placeholder="Enter New Password" value=""/>
                        		<?= form_error('password') ?>
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" name="c_password" class="form-control" equalsTo="#password" placeholder="Confirm Password" value=""/>
                        		<?= form_error('c_password') ?>
                            </div>
                        </div>
						<div class="login-btn">
					   		<input type="submit" value="Submit">
						</div>
                    </form>
                </div>
         </div>
</div>

   
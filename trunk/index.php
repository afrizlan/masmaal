<?php
$no_visible_elements=true;
include("header.php"); ?>
		<div class="box content">
			<br>
			<div class="row-fluid">
            	<div class="span12 center">
                	<img src="img/Header.png">
                </div>
            </div>
			</br>
			<div>
            <div class="row-fluid">
				<div class="span8 center login-header">
					<h1></h1>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Please login with your Username and Password.
					</div>
					<form class="form-horizontal" action="log_session.php?op=in" method="post" name="login">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" name="username_pegawai" id="USERNAME_PEGAWAI" type="text" placeholder="Username"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password_pegawai" id="PASSWORD_PEGAWAI" type="password" placeholder="Password" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
					</form>                    
				</div><!--/span-->
				</div>
                <div class="span12 center">
                	<img src="img/footer.png">
                </div>
			</div><!--/row-->
    
            </div>
<?php include("footer.php"); ?>

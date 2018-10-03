<!-- /.content-wrapper -->

<section class="subscribe container-fluid" style="background-image: url('https://images.unsplash.com/photo-1532703108233-69111d554cb4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0def37ea239f62017c9bf69be53802f6&auto=format&fit=crop&w=634&q=80');">
	<div class="overlay"></div>

	<div class="container">
		<div class="row">
			<div class="left col-xs-12 col-md-4">
				<h3 class="subtitle-md">
					join our newsletters to update
				</h3>
			</div>

			<div class="right col-xs-12 col-md-8">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Recipient's username" aria-label="enter your email address" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-primary" type="button" id="button-addon2">subcribe now</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<footer>
    <div class="container-fluid">

		<div class="container">
			<div class="row head">
				<div class="item col-xs-12 col-md-2">
					<ul>
						<li>
							<a href="<?php echo base_url('') ?>">
								home
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								men
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								women
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								kids
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('products/') ?>">
								favorites
							</a>
						</li>
					</ul>
				</div>

				<div class="item col-xs-12 col-md-2">
					<ul>
						<li>get help</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								order status
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								shipping and delivery
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								returns
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								payment options
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								contact us
							</a>
						</li>
					</ul>
				</div>

				<div class="item col-xs-12 col-md-2">
					<ul>
						<li>about us</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								news
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								careers
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								culture
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								investors
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								sustainable innocation
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								CA supply chains act
							</a>
						</li>
					</ul>
				</div>

				<div class="item col-xs-12 col-md-6">
					<ul>
						<li>
							<a href="<?php echo base_url('') ?>">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								<i class="fab fa-pinterest"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url('') ?>">
								<i class="fab fa-youtube"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="row foot">
				<div class="col">
					<p class="paragraph">2018 Run Now</p>
				</div>
				<div class="col">
					<p class="paragraph"> &copy; All Copyrights Reversed.</p>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php if(empty($username->id)): ?>
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="loginLabel">Login</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
		    <div class="login-box-body">
		        <p class="login-box-msg">Đăng nhập để truy cập</p>
		        <?php if ($this->session->flashdata('auth_message')): ?>
		            <?php echo $this->session->flashdata('auth_message'); ?>
		        <?php endif ?>
		        <?php echo form_open('', array('class' => 'form-horizontal')); ?>
		        <div class="form-group">
		            <?php echo form_label('Email', 'identity'); ?>
		            <?php echo form_error('identity'); ?>
		            <?php echo form_input('identity', '', 'class="form-control"'); ?>
		        </div>
		        <div class="form-group">
		            <?php echo form_label('Mật Khẩu', 'password'); ?>
		            <?php echo form_error('password'); ?>
		            <?php echo form_password('password', '', 'class="form-control"'); ?>
		        </div>
		        <div class="form-group">
		            <label>
		                <?php echo form_checkbox('remember', '1', FALSE); ?> Remember me
		            </label>
		        </div>
		        <div class="form-group">
		            <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-lg btn-block"'); ?>
		        </div>
		        <?php echo form_close(); ?>
		        <label>
				<a style="color: blue;font-size: 1.2rem;font-weight: normal;" href="<?php echo base_url('')?>" data-toggle="modal" data-target="#forgot_password" data-whatever="@getbootstrap"  class="close" data-dismiss="modal" aria-label="Close">
					Quên mật khẩu
				</a></label><br>
		    </div>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="forgot_password" tabindex="-1" role="dialog" aria-labelledby="forgot_passwordLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="forgot_passwordLabel">Forgot password</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
		    <div class="login-box-body">
		        <p class="login-box-msg">Quên mật khẩu</p>

		        <?php echo $this->session->flashdata('message'); ?>
		        <?php echo form_open('', array('class' => 'form-horizontal')); ?>
		        <div class="form-group">
		            <?php echo form_label('Email', 'email'); ?>
		            <?php echo form_error('email'); ?>
		            <?php echo form_input('email', '', 'class="form-control"'); ?>
		        </div>
		        <div class="form-group">
		            <?php echo form_submit('submit', 'Xác Nhận', 'class="btn btn-primary btn-lg btn-block"'); ?>
		        </div>

		        <?php echo form_close(); ?>
		    </div>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signupLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="signupLabel">Sign up</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div>
	            <?php if ($this->session->flashdata('auth_message')): ?>
	                <div class="alert alert-success alert-dismissible">
	                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
	                    <?php echo $this->session->flashdata('auth_message'); ?>
	                </div>
	            <?php endif ?>
	            <h1 style="text-align: center;">Đăng ký tài khoản</h1>
	            <?php echo form_open('', array('class' => 'form-horizontal')); ?>
	                <div class="form-group">
	                    <?php echo form_label('Họ:','first_name').'<br />'; ?>
	                    <?php echo form_error('first_name'); ?>
	                    <?php echo form_input('first_name',set_value('first_name'), 'class="form-control"'); ?>
	                </div>
	                <div class="form-group">
	                    <?php echo form_label('Tên:','last_name').'<br />'; ?>
	                    <?php echo form_error('last_name'); ?>
	                    <?php echo form_input('last_name',set_value('last_name'), 'class="form-control"'); ?>
	                </div>
	                <div class="form-group">
	                    <?php echo form_label('Tên Tài Khoản:','username').'<br />'; ?>
	                    <?php echo form_error('username'); ?>
	                    <?php echo form_input('username',set_value('username'), 'class="form-control"'); ?>
	                </div>
	                <div class="form-group">
	                    <?php echo form_label('Email:','email').'<br />'; ?>
	                    <?php echo form_error('email'); ?>
	                    <?php echo form_input('email',set_value('email'), 'class="form-control"'); ?>
	                </div>
	                <div class="form-group">
	                    <?php echo form_label('Mật Khẩu:', 'password').'<br />'; ?>
	                    <?php echo form_error('password'); ?>
	                    <?php echo form_password('password', '','class="form-control"'); ?>
	                </div>
	                <div class="form-group">
	                    <?php echo form_label('Xác Nhận Mật Khẩu:', 'confirm_password').'<br />'; ?>
	                    <?php echo form_error('confirm_password'); ?>
	                    <?php echo form_password('confirm_password', '','class="form-control"').'<br />'; ?>
	                </div>
	                <?php echo form_submit('submit','Đăng Ký', 'class="btn btn-primary btn-lg btn-block"').'<br /><br />'; ?>
	            <?php echo form_close(); ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
<?php else: ?>
	<div class="modal fade" id="Personal" tabindex="-1" role="dialog" aria-labelledby="PersonalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="PersonalLabel">Personal information</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div>
	            <h4 style="text-align: center;">Thông tin cá nhân</h4>
	            <table class="table table-inverse">
	            	<tbody>
	            		<tr>
	            			<th>Họ và tên</th>
	            			<td><?php echo $username->first_name.' '.$username->last_name;?></td>
	            			<td>
	            				<a href="<?php echo base_url('')?>" class="edit_name" data-toggle="modal" data-target="#edit_name" data-whatever="@getbootstrap" class="close" data-dismiss="modal" aria-label="Close">
									Edit
								</a>
							</td>
	            		</tr>
	            		<tr>
	            			<th>Email</th>
	            			<td><?php echo $username->email;?></td>
	            			<td></td>
	            		</tr>
	            		<tr>
	            			<th>Update</th>
	            			<td>
	            				<a href="<?php echo base_url('')?>" class="edit_password" data-toggle="modal" data-target="#edit_password" data-whatever="@getbootstrap" class="close" data-dismiss="modal" aria-label="Close">
									Đổi mật khẩu
								</a>
	            			</td>
	            			<td></td>
	            		</tr>
	            	</tbody>
	            </table>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="edit_name" tabindex="-1" role="dialog" aria-labelledby="edit_nameLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="edit_nameLabel">Update information</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div>
	            <h4 style="text-align: center;">Thay đổi thông tin cá nhân</h4>
	            <table class="table table-inverse">
	            	<tbody>
	            		<tr>
	            			<th>Họ</th>
	            			<td><input type="text" class="form-control" value="<?php echo $username->first_name;?>"></td>
	            		</tr>
	            		<tr>
	            			<th>Tên</th>
	            			<td><input type="text" class="form-control" value="<?php echo $username->last_name;?>"></td>
	            		</tr>
	            	</tbody>
	            </table>
	            <div class="col-xs-12" style="float: right;padding-right: 10px;">
	            	<span class="btn btn-primary" style="margin-left:5px " class="close" data-dismiss="modal" aria-label="Close">Hủy</span>
	            	<span class="btn btn-primary">Xác nhận</span>
	            </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="edit_password" tabindex="-1" role="dialog" aria-labelledby="edit_passwordLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="edit_passwordLabel">Update Password</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div>
	            <h4 style="text-align: center;">Thay đổi mật khẩu</h4>
	            <table class="table table-inverse">
	            	<tbody>
	            		<tr>
	            			<th>Mật khẩu cũ</th>
	            			<td><input type="text" class="form-control" placeholder="Nhập mật khẩu cũ"></td>
	            		</tr>
	            		<tr>
	            			<th>Mật khẩu mới</th>
	            			<td><input type="text" class="form-control" placeholder="Nhập mật khẩu mới"></td>
	            		</tr>
	            		<tr>
	            			<th>Xác nhận mật khẩu mới</th>
	            			<td><input type="text" class="form-control" placeholder="Xác nhận mật khẩu mới"></td>
	            		</tr>
	            	</tbody>
	            </table>
	            <div class="col-xs-12" style="float: right;padding-right: 10px;">
	            	<span class="btn btn-primary" style="margin-left:5px " class="close" data-dismiss="modal" aria-label="Close">Hủy</span>
	            	<span class="btn btn-primary">Xác nhận</span>
	            </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="modal fade" id="comment" tabindex="-1" role="dialog" aria-labelledby="commentLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="commentLabel">Comment</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div>
	            <h4 style="text-align: center;">Bình luận</h4>
                <div class="col-xs-12" style="margin-bottom: 10px;">
                    <span class="label label-default">Rating:</span>
                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                    <li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
                </div>
                <div class="col-xs-12" style="margin-bottom: 10px;">
                    <input type="" name="" class="form-control">
                </div>
	            <div class="col-xs-12" style="float: right;">
	            	<span class="btn btn-primary" style="margin-left:5px " class="close" data-dismiss="modal" aria-label="Close">Hủy</span>
	            	<span class="btn btn-primary">Xác nhận</span>
	            </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
<?php endif; ?>

<!-- popper js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<!-- Bootstrap js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Script -->
<script src="<?php echo site_url('assets/js/') ?>script.js"></script>

<!-- Cart -->
<script src="<?php echo site_url('assets/js/') ?>cart.js"></script>


</body>
</html>
 <!-- pages-title-start -->
 <section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Login</h2>
                            <p><a href="<?=base_url('template')?>/#">Home</a> | Login</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- pages-title-end -->
		<!-- login content section start -->
		<div class="login-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="tb-login-form ">
                            <h5 class="tb-title">Login</h5>
                            <p>Hello, Welcome your to account</p>
                            <form method="post" action="<?=base_url('login_submit')?>">
                             <div class="form-group input-group">
                				<input class="form-control" name="email" type="email" placeholder="Email" required><span class="input-group-addon"><i class="icon-mail"></i></span>
              				</div>
              				<div class="form-group input-group">
                				<input class="form-control" name="password" type="password" placeholder="Password" required><span class="input-group-addon"><i class="icon-lock"></i></span>
              				</div>
                                <div class="forgot-password1">
                                    <label class="inline2">
                                        <input type="checkbox" name="rememberme7">
                                        Remember me! <em>*</em>
                                    </label>
                                    <a class="forgot-password" href="">Forgot Your password?</a>
                                </div>
                                <div class="text-center text-sm-right">
                					<button class="btn btn-primary margin-bottom-none" type="submit">Login</button>
              					</div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="tb-login-form res">
                            <h5 class="tb-title">Create a new account</h5>
                            <p>Hello, Welcome your to account</p>
                            <form method="POST" action="<?=base_url('register_submit')?>">
							<div class="col-sm-6">
                <div class="form-group">
                  <label for="name-fn">Name</label>
                  <input class="form-control" name="name" type="text" id="name" required>
                </div>
              </div>
			  <div class="col-sm-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input class="form-control" name="email" type="text" id="email" required>
                </div>
              </div><div class="col-sm-6">
                <div class="form-group">
                  <label for="password">Password</label>
                  <input class="form-control" name="password" type="password" id="password" required>
                </div>
              </div><div class="col-sm-6">
                <div class="form-group">
                  <label for="copassword">Confirm Password</label>
                  <input class="form-control" name="copassword" type="password" id="copassword" required>
                </div>
              </div>		
			  <div class="col-12 text-center text-sm-right">
                <button class="btn btn-primary margin-bottom-none" type="submit">Register</button>
              </div>
                            </form>
                            <div class="tb-info-login ">
                                <h5 class="tb-title4">SignUp today and you'll be able to:</h5>
                                <ul>
                                    <li>Speed your way through the checkout.</li>
                                    <li>Track your orders easily.</li>
                                    <li>Keep a record of all your purchases.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- login  content section end -->
      
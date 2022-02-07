@extends("index")
 
@section("content")
					
					<div class="forms-grids">
						<div class="forms3">
						<div class="w3agile-validation w3ls-validation">
							<div class="panel panel-widget agile-validation register-form">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>Register Form :</h3>
									</div>
									<div class="form-body form-body-info">
										<form data-toggle="validator" action="#" method="post">
											<div class="form-group valid-form">
												<input type="text" class="form-control" id="inputName" name="Username" placeholder="Username" required="">
											</div>
											<div class="form-group has-feedback">
												<input type="email" class="form-control" name="Email" placeholder="Email" data-error="That email address is invalid" required="">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												<span class="help-block with-errors">Please enter a valid email address</span>
											</div>
											<div class="form-group">
											  <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" name="Password" placeholder="Password" required="">
											  <span class="help-block">Minimum of 6 characters</span>
											</div>
											<div class="form-group">
											  <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" name="Confirm password" placeholder="Confirm password" required="">
											  <div class="help-block with-errors"></div>
											</div>
											<div class="form-group">
												<div class="radio">
													<label>
													  <input type="radio" name="gender" required="">
													  Female
													</label>
												</div>
												<div class="radio">
													<label>
													<input type="radio" name="gender" required="">
													Male
													</label>
												</div>
											</div>
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="terms" data-error="Before you wreck yourself" required="">
														I have read and accept terms of use.
													</label>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-primary disabled">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							
							
						</div>
						<div class="clear"> </div>
						</div>
					</div>
@endsection

@section("footer")
		<div class="footer">
			<p>For Login <a href="{{ url('mylogin') }}">Click here</a></p>
		</div>
@endsection
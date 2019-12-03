@extends('pages.layout')
@section('content')





<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					<div class="login-form">

						<!-- login form -->
						<h2>Login to your account</h2>
						<form action="#" method="">
							<input type="text" placeholder="Email" name="customer_email" />
							<input type="password" placeholder="Password" name="customer_password" />
							
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form">


						<!--new user sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{url('/customer_registration')}}" method="post">
							{{csrf_field()}}
							<input type="text" placeholder="Name" name="customer_name" />
							<input type="email" placeholder="Email Address" name="customer_email" />
							
							<input type="password" placeholder="Password"/ name="customer_password">

							<input type="text" placeholder="Mobile Number"/ name="Mobile_Number">
						
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->




@endsection
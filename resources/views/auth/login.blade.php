<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="'{{url('login_assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('login_assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('login_assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('login_assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('login_assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('login_assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{url('login_assets/images/img-01.png')}}" alt="IMG">
				</div>

				<form class="login100-form " method="POST" action="{{ route('login') }}">
				@csrf
					<span class="login100-form-title">
						خوش آمدید 
					</span>

					<div class="wrap-input100"  >

					<input  type="email" class="form-control  input100 " name="email" value="{{ old('email') }}" required  autofocus>

				
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope " aria-hidden="true"></i>
						</span>

					</div>

					<div class="wrap-input100 ">


					<input id="password" type="password" class="form-control input100" name="password" required autocomplete="current-password">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>


					</div>

					@if ($errors->any())
					@foreach ($errors->all() as $error)
					<div>
						<div class="row">
								<ul class="pull-right" style="color: #DC2700;font-weight:bold;">
						<li class="btn btn-danger" >{{$error}}</li>
						</ul>
						</div>
						
					</div>
				
					
					@endforeach
					@endif
					
					<div class="container-login100-form-btn">
						<button  type="submit" class="login100-form-btn ">
							Login
						</button>
					</div>

					
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="{{ route('password.request') }}">
							Username / Password?
						</a>
					</div>
					<div class="text-center p-t-136">
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{url('login_assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('login_assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('login_assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('login_assets/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('login_assets/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<!-- <script src="{{url('login_assets/js/main.js')}}"></script> -->

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<h1>Login</h1>
				<form method="POST">
					@csrf

					<div class="row">

						<div class="col">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Email address</label>
								<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email" name="email">
							</div>        
						</div>


					</div>

					<div class="row">

						<div class="col">
							<div class="mb-3">
								<label for="exampleFormControlInput1" class="form-label">Password</label>
								<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Password" name="password">
							</div>
						</div>

					</div>




					<div class="d-grid gap-2 mb-3 mt-4">
						<input type="submit" name="login" class="btn btn-primary btn-block" value="Login">    
					</div>

					<div class="text-center d-grid">
						<a href="{{route('loginwithgoogle')}}" class="btn btn-danger align-center">Login with Google </a>
					</div>
					<a href="{{route('signup')}}">Do you Have Account?Signup</a>

				</div>









			</form>
		</div>

	</div>
</div>
</div>


</body>

</html>
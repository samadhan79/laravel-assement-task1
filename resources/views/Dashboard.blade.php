<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<!-- <h1>Welcome {{$s->fname}}</h1>
		<a href="{{route('logout')}}">Logout</a> -->



		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-primary mb-4">
				<a class="navbar-brand" href="#">Demo</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="{{route('logout')}}">Logout</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="">{{$s->fname}}</a>
						</li>



					</ul>


				</div>
			</nav>
			<div class="row">
				@foreach($user as $u)
				<div class="col-md-4 mb-4">
					<div class="card" style="width: 18rem;">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<h5 class="card-title">Name  : {{$u->fname}}</h5>
							<p class="card-text"> Gender : {{$u->gender}}</p>
							<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
						</div>
					</div>
				</div>
				@endforeach
			</div>

		</div>

	</body>
	</html>
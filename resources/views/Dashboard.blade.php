<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<h1>Welcome {{$s->fname}}</h1>
	<a href="{{route('logout')}}">Logout</a>
	
</body>
</html>
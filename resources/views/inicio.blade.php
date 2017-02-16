<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	{{-- <link rel="stylesheet" type="text/css" href="css/theme.min.css"> --}}
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/diver.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-toggleable-sm">
		<div class="navbar-header">
			<button class="navbar-toggle navbar-toggler-right" type="button" data-toggle="collapse" data-target="#barraSesion" aria-expanded="false" aria-label="Toggle navigation">
				...
			</button>
		</div>
		<div class="collapse navbar-collapse" id="barraSesion">
			<ul class="nav navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="/">Inicio</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item active">
					<a class="nav-link" href="/cerrarSesion">Cerrar sesión</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 hidden-xs">
				<div class="affix panel panel-default sidepanel">
					<div class="panel-heading">
						<a href="/usuario">
							<img src={{Auth::user()->avatarMinRuta}}>
						</a>
						ID de usuario: {{ Auth::id()}}
					</div>
					<div class="panel-body">
						Clubes que sigo...
					</div>
				</div>
			</div>
			<div class="col-sm-3 col-sm-push-6 hidden-xs">
				<div class="affix panel panel-default sidepanel">
					Nuevos grupos...
				</div>
			</div>
			<div class="col-sm-6 col-sm-pull-3">
				<div class="row">
					@for ($i = 0; $i < 15; $i++)
					<div class="panel panel-default">
						<div class="panel panel-heading">
							Publicación {{$i}}
							<br>
						</div>
						<div class="panel panel">
							Aquí va a haber contenido...
						</div>
					</div>
					@endfor
				</div>
			</div>
		</div>
	</div>
</body>
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
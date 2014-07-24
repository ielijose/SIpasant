<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<head>
	<!-- BEGIN META SECTION -->
	<meta charset="utf-8">
	<title>Acceder | SIpasant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="" name="description" />
	<meta content="themes-lab" name="author" />
	<link rel="shortcut icon" href="favicon.ico">
	<!-- END META SECTION -->
	<!-- BEGIN MANDATORY STYLE -->
	<link href="assets/css/icons/icons.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/plugins.min.css" rel="stylesheet">
	<link href="assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
	<link href="assets/css/style.min.css" rel="stylesheet">
	<link href="#" rel="stylesheet" id="theme-color">
	<!-- END  MANDATORY STYLE -->
	<!-- BEGIN PAGE LEVEL STYLE -->
	<link href="assets/css/animate-custom.css" rel="stylesheet">
	<!-- END PAGE LEVEL STYLE -->
	<script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body class="login fade-in" data-page="signup">
	<!-- START SIGNUP BOX -->
	<div class="row alert alert-info">
		<div class="col-md-2">
			<img class="img-rounded img-responsive" src="/assets/img/luz.png" alt="">
		</div>

		<div class="col-md-8">
			<h1>Sistema de pasantías LICOM</h1>
		</div>

		<div class="col-md-2">
			<img class="img-rounded img-responsive" src="/assets/img/fec.png" alt="">
		</div>
	</div>
	<div class="container" id="login-block">


		<div class="row">





			<div class="col-sm-6 col-md-4 col-sm-offset-1 col-md-offset-1" id="access-box">
				<div class="login-box clearfix animated flipInY">
					
					<div class="login-logo">
						<h2>Iniciar Sesión</h2>
					</div>
					<hr>
					<div class="login-form">
						@if(Session::has('message'))

						<!-- BEGIN ERROR BOX -->
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<h4>Error!</h4>
							{{ Session::get('message') }}
						</div>
						<!-- END ERROR BOX --> 
						@endif
						<form action="/login" method="post">
							{{ $errors->first('usuario_login', '<div class="alert alert-danger">  :message</div>') }}
							{{ Form::text('usuario_login', Input::old('usuario_login'), array('placeholder'=>'Usuario', 'class' => 'input-field form-control user')) }}

							{{ $errors->first('contrasena_login', '<div class="alert alert-danger">  :message</div>') }}
							{{ Form::password('contrasena_login',  array('placeholder'=>'Contraseña', 'class' => 'input-field form-control password')) }}

							<button id="submit-form" class="btn btn-login ladda-button" data-style="expand-left"><span class="ladda-label">Acceder</span></button>
						</form>
						<div class="login-links">
							<a href="#" id="forgot">Recuperar contraseña</a>
							<br>
						</div>
					</div>
				</div>
				
			</div>


			<div class="col-sm-6 col-md-4 col-sm-offset-1 col-md-offset-1 hide" id="forgot-box">
				<div class="login-box clearfix animated flipInY">
					
					<div class="login-logo">
						<h2>Recuperar Contraseña</h2>
					</div>
					<hr>
					<div class="login-form">
						@if(Session::has('message'))

						<!-- BEGIN ERROR BOX -->
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<h4>Error!</h4>
							{{ Session::get('message') }}
						</div>
						<!-- END ERROR BOX --> 
						@endif
						<form action="/forgot" method="post">
							{{ $errors->first('correo', '<div class="alert alert-danger">  :message</div>') }}
							{{ Form::text('correo', Input::old('usuario_login'), array('placeholder'=>'ielijose@gmail.com', 'class' => 'input-field form-control user')) }}



							<button id="submit-form" class="btn btn-login ladda-button" data-style="expand-left"><span class="ladda-label">Recuperar</span></button>
						</form>
						<div class="login-links">
							<a href="#" id="access">Acceder</a>
							<br>
						</div>
					</div>
				</div>
				
			</div>








			<div class="col-sm-6 col-md-4 col-sm-offset-2 col-md-offset-2">
				<div class="login-box clearfix animated flipInY">
					
					<div class="login-logo">
						<h2>Registrate</h2>
					</div>
					<hr>
					<div class="login-form">
						<!-- Start Error box -->
						<div class="alert alert-danger hide">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<h4>Error!</h4>
							Your Error Message goes here
						</div>
						<!-- End Error box -->
						<form action="/register" method="post">
							{{ $errors->first('nombre', '<div class="alert alert-danger">  :message</div>') }}
							{{ Form::text('nombre', Input::old('nombre'), array('placeholder'=>'Nombre', 'class' => 'input-field')) }}

							{{ $errors->first('apellido', '<div class="alert alert-danger">  :message</div>') }}
							{{ Form::text('apellido', Input::old('apellido'), array('placeholder'=>'Apellido', 'class' => 'input-field')) }}

							{{ $errors->first('correo', '<div class="alert alert-danger">  :message</div>') }}
							{{ Form::text('correo', Input::old('correo'), array('placeholder'=>'E-mail', 'class' => 'input-field')) }}

							{{ $errors->first('usuario', '<div class="alert alert-danger">  :message</div>') }}
							{{ Form::text('usuario', Input::old('usuario'), array('placeholder'=>'Usuario', 'class' => 'input-field')) }}

							{{ $errors->first('password', '<div class="alert alert-danger">  :message</div>') }}
							{{ Form::password('password',  array('placeholder'=>'Contraseña', 'class' => 'input-field')) }}

							<button id="submit-form" class="btn btn-login ladda-button" data-style="expand-left"><span class="ladda-label">Registrarse</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END SIGNUP BOX -->
	<!-- BEGIN MANDATORY SCRIPTS -->
	<script src="assets/plugins/jquery-1.11.js"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
	<script src="assets/plugins/jquery-mobile/jquery.mobile-1.4.2.js"></script>
	<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
	<script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<!-- END MANDATORY SCRIPTS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/plugins/backstretch/backstretch.min.js"></script>
	<script src="assets/plugins/bootstrap-loading/lada.min.js"></script>
	<script src="assets/js/account.js"></script>

	<script>
	$(document).on("ready", function(event){
		event.preventDefault();

		$("a#forgot").on("click", function(){
			$("#access-box").slideUp("slow", function(){
				$("#forgot-box").removeClass('hide').slideDown('slow');;
			})
		})

		$("a#access").on("click", function(){
			$("#forgot-box").slideUp("slow", function(){
				$("#access-box").slideDown('slow');
			})
		})
		
	});

	</script>
	<!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>

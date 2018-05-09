<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/css/bootstrap.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

 <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4">
               <br>
               <br>
                @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops! </strong> Al parecer algo esta mal.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if(Session::has('csrf'))
					<div class="alert alert-danger">
					    <strong>Whoops! </strong>Al parecer algo salio mal <br><br>
					    {{Session::get('csrf')}}
					</div>
                    @endif  
               <br>
                <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
				    
                  <div class="card-header">Inicia Sesión porfavor</div>
                  <div class="card-body">
                    <form role="form" method="POST" action="/validacion/inicio">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="email" type="email" autofocus value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Recuerdame
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-info btn-block">
									Iniciar sesión
								</button>
                                <p></p>
                                <center>                                                       
                                <a href="/validacion/recuperar" style="color:yellow;">Olvide mi contraseña</a>
                                </center>
                            </fieldset>
                    </form>
                    
                  </div>
                </div>
            </div>
        </div>
    </div>  
   
	<!-- Scripts -->
	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	@yield('jquery')
	
</body>
</html>

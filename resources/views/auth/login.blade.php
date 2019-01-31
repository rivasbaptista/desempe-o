<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ config('app.name', 'Login') }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Gestor') }}</title>
    <!-- Compiled and minified JavaScript -->

            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">


			<link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
</head>
<body class="blue darken-4" >
		<div class="row no-bottom" id="app">
			<div class="col s6 m6 l4 white fondo-form">
				<div class="section"> <img src="{{ url('images/logo.png') }}" class="logo-login" alt=""></div>
				<div class="section center">
					<h6 class="blue-text text-darken-4">EVALUACIÓN DE DESEMPEÑO</h6>
					<span class="blue-text text-darken-4">Bienvenidos</span>
				</div>
				<div class="section"></div>
				<div class="section"></div>
				<form method="POST" action="{{ route('login') }}" class="col s12">
					 @csrf
					<div class="row">
						<div class="col s6 input-field offset-s3">
							<input id="email" type="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
							<label for="email">Correo</label>

							 @if ($errors->has('email'))
                                <span class="red-text">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
						</div>
					</div>

					<div class="row">
						<div class="col s6 input-field  offset-s3">
							 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
							<label for="password">Contraseña</label>

							@if ($errors->has('password'))
                                <span class="red-text col s12 offset-l1" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
						</div>
					</div>


					 <div class="row">     
                        <p class="center">
                            <label>
                                <input  type="checkbox" {{ old('remember') ? 'checked' : '' }} >
                                <span class="blue-text text-darken-4">Recuerdame</span>
                            </label>
                        </p>
                    </div>

                    
					<div class="row">
						<button class="col s12 m12 l6 btn offset-l3 amber darken-3 ">Ingresar</button>
					</div>


				</form>
				<div class="row center">
					<div class="col s12 m12 l11">
						<p class="mensaje ">
						@if (Route::has('password.request'))
                                    <a class="amber-text text-darken-3" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
						</p>
					</div>
				
					
				</div>
				
			</div>
			<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>
			<div class="col s6 m6 l7 center box">
				<span class="white-text  text1">Seguros Altamira</span><span class="amber-text text2">Portal de evalucación de desempeño</span>
			</div>
		</div>
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
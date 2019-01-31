@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col s12 m12 l8 offset-l2">
            <div class="card">
                <div class="card-title">{{ __('Reset Password') }}</div>

                <div class="card-content">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

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

                        <div class=" row">
                            <div class="col s6 input-field  offset-s3">
                                <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            </div>
                        </div>

                        <div class="row">
                            
                                <button type="submit" class="col s12 m12 l6 btn offset-l3 amber darken-3">
                                    {{ __('Reset Password') }}
                                </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

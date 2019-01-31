@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col s12 m12 l8 offset-l2">
            <div class="card">
                <div class="card-title">{{ __('Reset Password') }}</div>

                <div class="card-content">
                    @if (session('status'))
                        <div class="new badge flow-text  green-text text-accent-4">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class=" row">
                            
                                <button type="submit" class="col s12 m12 l6 btn offset-l3 amber darken-3  ">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

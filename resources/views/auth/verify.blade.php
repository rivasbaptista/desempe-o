@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col s12 m12 l8 offset-l2">
            <div class="card">
                <div class="card-title">{{ __('Verify Your Email Address') }}</div>

                <div class="card-content">
                    @if (session('resent'))
                        <div class="new badge flow-text  green-text text-accent-4 " >
                          <i class="material-icons">check</i>  {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

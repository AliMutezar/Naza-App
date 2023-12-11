@extends('layouts.guest-naza')
@section('content')
<div class="card-body shadow p-3 bg-body-tertiary rounded">
   <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required autofocus autocomplete="username">
            
            <div class="mt-2">
                @error('email')
                   <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
        </div>

        <div class="me-auto mb-3 form-check">
            <label class="form-check-label" for="remember_me">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <span>Remember Me</span>
            </label>
        </div>

        <div class="d-flex justify-content-end">
            @if (Route::has('password.request'))
                <div class="p-2 align-items-center">
                    <a class="text-secondary me-2" href="{{ route('password.request') }}">Forgot your password?</a>
                </div>
            @endif
           <x-primary-button>
                {{ __('Login') }}
           </x-primary-button>
        </div>
    </form>
</div>
@endsection